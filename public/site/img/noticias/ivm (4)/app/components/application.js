var currentPage = 'home-screen';
var municipalities = { 1: {}, 2: {}, 3: {} };
var markedCluster = '';
var markedClusterHuman = '';
var responseCluster = [];
var modalAberto = false;
var lastPage = '';
let translateValue = 0;
var actualState = '';
var actualDimension = '';
const HOST = 'http://ivm.votorantim.rarolabs.com';
var dadosBrasil = {};
var stateMap = {};

$('#home-screen .secao-mapa').hover(function() {
  $('#estado-no-hover').text($(this).children().data('estado'));
  $('#search_block_general').addClass('disabled');
});

$('#home-screen .secao-mapa').mouseleave(function () {
  $('#estado-no-hover').text('Escolha um estado no mapa');
  $('#search_block_general').removeClass('disabled');
});

function scrollTo(element) {
  $([document.documentElement, document.body]).animate({
    scrollTop: $(element).offset().top,
  }, 1000);
}

function goHome() {
  currentPage = 'home-screen';
  resetParams();
  $('#state').hide();
  $('#compare').hide();
  $('#ivm-structure').hide();
  $('#heat-map').hide();
  $('#home-screen').show();
  scrollTo('#page-header');
  manageModal(false);
}

function goState() {
  currentPage = 'state';
  $('#home-screen').hide();
  manageModal(false);
  $('#state').show();
  scrollTo('#page-header');
  $('#state .state-search-content').hide();
}

async function goSelectedState() {
  currentPage = 'selected-state';
  $('#home-screen').hide();
  manageModal(false);
  $('#state').show();
  const city = $('#selected-municipality').data('descricao');
  const response = await Cities.all({ state: city });
  $('.state-search h1').text(city);
  $('.state-search h2').text(`${response.total_count} Municípios`);
  Autosuggest.stateTypeaheadBloodhound('#city-search', city);
  $('#state .state-search-content').show();
  if (isMobile()) {
    scrollTo('.state-search-content');
  } else {
    scrollTo('#page-header');
  }
}

function goHeatMap() {
  currentPage = 'heat-map';
  $('#home-screen').hide();
  manageModal(false);
  $('#heat-map').show();
  scrollTo('#page-header');
  const maxHeight = ($('#heat-map .heat-map-content .map').height() - 20);
  $('#heat-map .heat-map-content .table-content').css('min-height', maxHeight);
}

function manageLoading(show){
  if (show) {
    $('.loading').addClass('show');
    $('.table-content').hide();
    $('.table-content-h5').hide();
    $('.table-content-h6').hide();
    $('.table-content-sim-nao').hide();
    $('#select-states-map').parent('.custom-select').addClass('disabled');
    $('#select-filters-map').parent('.custom-select').addClass('disabled');
    $('#select-microregion').parent('.custom-select').addClass('disabled');
    $('.custom-range').addClass('disabled');
    $('.covid-data').hide();
  } else {
    $('.loading').removeClass('show');
    $('.table-content').show();
    $('.table-content-h5').show();
    $('#select-states-map').parent('.custom-select').removeClass('disabled');
    $('#select-filters-map').parent('.custom-select').removeClass('disabled');
    $('#select-microregion').parent('.custom-select').removeClass('disabled');
    $('.custom-range').removeClass('disabled');
    $('.covid-data').show();
  }
}

function filtrarPorRange() {
  manageLoading(true);
  let estado = $('#select-states-map optgroup').children('option:selected').val();
  let filtro = $('#select-filters-map optgroup').children('option:selected').val();
  const microregion = $('#select-microregion').children('option:selected').val();
  changeToStateMap(estado, filtro, microregion, true);
};

function goIvmStructure() {
  lastPage = currentPage;
  currentPage = 'ivm-structure';
  if (lastPage == 'home-screen') {
    $('#home-screen').hide();
  } else {
    $('#compare').hide();
  }
  manageModal(false);
  $('#ivm-structure').show();
  scrollTo('#page-header');
}

async function goCompare() {
  translateValue = 0;
  goLeft();
  steps(translateValue);
  currentPage = 'compare';
  $('#state').hide();
  $('#home-screen').hide();
  $('#heat-map').hide();
  $('#ivm-structure').hide();
  manageModal(false);
  $('#compare').show();
  scrollTo('#page-header');
  if (markedCluster == '') {
    markedCluster = municipalities[1].cluster;
    markedClusterHuman = municipalities[1].faixa_populacional;
  }
};

function resetParams() {
  municipalities = { 1: {}, 2: {}, 3: {} };
  markedCluster = '';
  markedClusterHuman = '';
  responseCluster = [];
  modalAberto = false;
  lastPage = '';
  translateValue = 0;
  actualState = '';
  actualDimension = '';
  $('.secao-mapa').each(function () {
    $(this).find('path').css('fill', '#0C46E6');
  });
}

$('#voltar').on('click', () => {
  if (currentPage == 'home-screen') {
    window.history.back();
  } else if (currentPage == 'ivm-structure') {
    if (lastPage == 'home-screen') {
      goHome();
    } else {
      goCompare();
    }
  } else {
    goHome();
  }
});

$('.close-modal').on('click', () => {
  manageModal(false);
});

$('.go-estrutura-ivm').on('click', () => {
  goIvmStructure();
});

$('.go-state').on('click', () => {
  goState();
});

$('.go-heat-map').on('click', function () {
  manageLoading(true);
  if (jQuery.isEmptyObject(dadosBrasil)) {
    changeToStateMap('brasil', 'ivm');
  } else {
    setTimeout(() => {
      $('#select-states-map').val('brasil');
      $('#select-filters-map').val('ivm');
      $('#select-microregion').html('');
      $('.select-microregion').addClass('d-none');
      changeToStateMap('brasil', 'ivm');
    }, 100);
  }
  goHeatMap();
});

function debounce(func, wait, immediate) {
  var timeout;
  return function () {
    var context = this, args = arguments;
    var later = function () {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
};
function betweenValues(value, low, high) {
  if (value > low && value < high) {
    return true;
  }
  else {
    return false;
  }
}
function manageModal(open) {
  modalAberto = open;
  if (open) {
    $('#modal').addClass('show');
    $('#modal .subtitle').html(markedClusterHuman);
  } else {
    $('#modal').removeClass('show');
  }
};

const isMobile = () => {
  return $('.choice-municipality').is(':visible');
};

const hammerFunc = debounce((event) => {
  if (event.pointerType == 'touch' && (Math.abs(event.deltaY) > Math.abs(event.deltaX))) return false;
  if (event.type == 'panleft') {
    goRight();
  } else {
    goLeft();
  }
  steps(translateValue);
}, 250);

$(document).ready(async () => {
  renderIvmStructureChart();
  if (isMobile()) {
    var swipeArea = document.getElementById('swipeArea');
    var hammer = new Hammer(swipeArea);
    hammer.on('panleft panright', (ev) => {
      hammerFunc(ev);
    });
    $('#ivm-structure .pilar-5').html('5. CAPACIDADE FISCAL ADM. MUNICIPAL <small>Composição IVM: 11,76%</small>');
  }
});

function renderIvmStructureChart() {
  let options = {
    legend: {
      display: false,
    },
    tooltips: {
      enabled: false,
    },
    plugins: {
      datalabels: {
        formatter: (value, ctx) => {
          let sum = 0;
          let dataArr = ctx.chart.data.datasets[0].data;
          dataArr.map(data => {
            sum += data;
          });
          let percentage = value.toFixed(2) + "%";
          return percentage.replace('.', ',');
        },
        color: '#fff',
        font: { weight: 'bold' },
      }
    }
  };

  chart = new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
      labels: ["População Vulnerável", "Economia local", "Estrutura do sistema de saúde", "Organização do sistema de saúde", "Capacidade fiscal administração pública"],
      datasets: [
        {
          borderColor: "#0000BF",
          backgroundColor: ["#F3AA47", "#B4DC32", "#7BB873", "#0C46E6", "#06E3FF"],
          data: [32.35, 11.76, 23.53, 20.59, 11.76]
        }
      ]
    },
    options: options
  });
}

const mountTextTooltip = (d, dimension) => {
  let label = $(`option[value=${dimension}]`).text();
  let value = getDimensionValue(dimension, d);
  if (value >= 0) {
    return `<strong>${d.properties.nome_sem_formato}</strong><br>
				<strong>${label}:</strong> ${getFormattedDimensionValue(dimension, d)}<br>
				<strong>População estimada:</strong> ${d.properties.populacao_formatado}`
  }
  return `<strong>${d.properties.nome_sem_formato}</strong><br>
			<strong>População estimada:</strong> ${d.properties.populacao_formatado}`
}

const prepareData = (dadosSvg, dadosMunicipios, dimension, filtro) => {
  let valid;
  dadosSvg.forEach(({ properties }) => {
    valid = true;
    const city = dadosMunicipios.filter(uf => uf.codigo_ibge === properties.codarea)
    properties.nome_sem_formato = city[0].nome_sem_formato
    properties.populacao_formatado = city[0].populacao_formatado
    if (city.length > 0) {
      if (filtro.hasOwnProperty('range')) {
        valid = city[0][dimension] >= filtro['range']['low'] && city[0][dimension] <= filtro['range']['high'];
      }
      if (valid && filtro.hasOwnProperty('microregion')) {
        valid = city[0]['microrregiao'] == filtro['microregion']
      }
      if (valid) {
        Object.assign(properties, city[0]);
      }
    }
  });
}

$('#select-states-map, #select-filters-map, #select-microregion').on('change', () => {
  manageLoading(true);
  const newState = $('#select-states-map optgroup').children('option:selected').val();
  const filter = $('#select-filters-map optgroup').children('option:selected').val();
  const microregion = $('#select-microregion').children('option:selected').val();
  if (newState == 'brasil') {
    $('#select-microregion').html('');
    $('.select-microregion').addClass('d-none');
  }
  changeToStateMap(newState, filter, microregion, false);
});

$('#select-states-map').on('mousedown', () => {
  $('#select-microregion').html(`<option value="" selected>Todas</option>`);
});

const handleDataAndDrawMap = (state, dimension, microregion, range) => {
  let filtro = {}
  svg = d3.select('#map');
  g = svg.append('g');
  gPolygons = g.append('g');
  gTexts = g.append('g');
  gScale = svg.append('g');
  options = { sortField: dimension, sortDesc: true };
  tooltip = d3.select('.map').insert('div').classed('tooltip', true).style('opacity', 0);
  if (microregion != '') {
    filtro['microregion'] = microregion;
  } else {
    const microregions = dadosBrasil
      .filter((city) => city.sigla == state)
      .map((city) => city.microrregiao)
      .filter(uniqFilter);

    microregionsSelectionBuilder(microregions);
  }

  if (range == true) {
    $('.custom-range').removeClass('d-none');
    let min = $('#min-value').data('value');
    let max = $('#max-value').data('value');
    filtro['range'] = { 'low': min, 'high': max };
  } else {
    if(!['referencia_internacoes', 'referencia_exames'].includes(dimension)){
      const valores = xValuesFromCase(dimension, dadosBrasil);
      const minValue = d3.min(valores);
      const maxValue = d3.max(valores);
      let firstValue = formatNumber(minValue, dimension);
      let secondValue = formatNumber(maxValue, dimension);
      $('.custom-range').removeClass('d-none');
      $('.custom-range').empty();
      $('.custom-range').html('<label>Refine o intervalo de sua busca</label>');
      $('.custom-range').append(`<div class='slider'><input class='range-slider' type='hidden' value='${minValue},${maxValue}' style='display: none;'></div>`);
      $('.custom-range').append('<div class="range-value-content"></div>');
      $('.range-value-content').append(`<input class='range-value' id="min-value" data-value=${minValue} value=${firstValue}>`);
      $('.range-value-content').append(`<input class='range-value' id="max-value" data-value=${maxValue} value=${secondValue}>`);
      $('.range-slider').jRange({
        from: minValue,
        to: maxValue,
        step: 1.101,
        showScale: false,
        format: '%s',
        width: 300,
        showLabels: false,
        isRange: true,
      });
      $('#min-value').off('click');
      $('#min-value').on('click', () => {
        $('#min-value').val('');
        $('#min-value').data('value', 0);
      });
      $('#max-value').off('click');
      $('#max-value').on('click', () => {
        $('#max-value').val('');
        $('#max-value').data('value', 0);
      });
      $('#min-value').off('change');
      $('#min-value').on('change', () => {
        let dataMin = $('#min-value').val().replace('$', '').replace('%', '').replace('R', '').replace('.', '').replace(',', '.');
        let dataMax = $('#max-value').val().replace('$', '').replace('%', '').replace('R', '').replace('.', '').replace(',', '.');
        dataMin = dataMin.includes('.') ? parseFloat(dataMin) : parseInt(dataMin);
        dataMax = dataMax.includes('.') ? parseFloat(dataMax) : parseInt(dataMax);
        $('#min-value').data('value', dataMin);
        $('#max-value').data('value', dataMax);
        $('.range-slider').jRange('setValue', `${dataMin}, ${dataMax}`);
        $('#min-value').val(formatNumber(dataMin, dimension));
        $('#max-value').val(formatNumber(dataMax, dimension));
        filtrarPorRange();
      });
      $('#max-value').off('change');
      $('#max-value').on('change', () => {
        let dataMin = $('#min-value').val().replace('$', '').replace('%', '').replace('R', '').replace('.', '').replace(',', '.');
        let dataMax = $('#max-value').val().replace('$', '').replace('%', '').replace('R', '').replace('.', '').replace(',', '.');
        dataMin = dataMin.includes('.') ? parseFloat(dataMin) : parseInt(dataMin);
        dataMax = dataMax.includes('.') ? parseFloat(dataMax) : parseInt(dataMax);
        $('#min-value').data('value', dataMin);
        $('#max-value').data('value', dataMax);
        $('.range-slider').jRange('setValue', `${dataMin}, ${dataMax}`);
        $('#min-value').val(formatNumber(dataMin, dimension));
        $('#max-value').val(formatNumber(dataMax, dimension));
        filtrarPorRange();
      });
      $('.slider').unbind('mouseup');
      $('.slider').unbind('touchend');
      $('.slider').bind('mouseup touchend', function () {
        let low = $('.low').text();
        let high = $('.high').text();
        low = low.includes('.') ? parseFloat(low) : parseInt(low)
        high = high.includes('.') ? parseFloat(high) : parseInt(high)
        $('#min-value').data('value', low);
        $('#min-value').val(formatNumber(low, dimension));
        $('#max-value').data('value', high);
        $('#max-value').val(formatNumber(high, dimension));
        filtrarPorRange();
      });
    }else{
      $('.custom-range').addClass('d-none');
    }
  }
  var auxData = JSON.parse(JSON.stringify(stateMap[state]));
  prepareData(auxData, dadosBrasil, dimension, filtro);
  renderMap(auxData, dimension, mountTextTooltip);
}

const getCityData = (id) => {
  Promise.all([d3.json(`${HOST}/api/v1/municipalities/${id}`)]).then(([data]) => {
    Compare.add(data);
    goCompare();
  });
}

const changeToStateMap = (state, dimension, microregion = '', range = false) => {
  d3.select('#map .svg').remove();
  $('#tbl tbody').empty();
  d3.select('.svg').html('<svg id="map" class="svg__mapa" viewBox="0 0 500 500"></svg>');

  let urls = [];
  if (!stateMap.hasOwnProperty(state)) {
    urls.push(d3.json(`${HOST}/api/v1/cities/${state}`));
    urls.push(d3.json(`${HOST}/api/v1/dados2/${state}?dimension=${dimension}`));
  } else if (!['casos_confirmados', 'mortes', 'confirmados_por_mil', 'obitos_por_mil'].includes(dimension)) {
    urls.push(d3.json(`${HOST}/api/v1/dados2/${state}?dimension=${dimension}`));
  }

  if (urls.length > 0 && (actualDimension != dimension || actualState != state)) {
    Promise.all(urls).then(([stateData, data]) => {
      if (!jQuery.isEmptyObject(data)) {
        dadosBrasil = data;
        stateMap[state] = stateData.features;
      } else {
        dadosBrasil = stateData;
      }
      handleDataAndDrawMap(state, dimension, microregion, range);
    });
  } else {
    handleDataAndDrawMap(state, dimension, microregion, range);
  }
  actualDimension = dimension;
  actualState = state;
};

const microregionsSelectionBuilder = (microregions) => {
  microregionsBuffer = `<option value="" selected>Todas</option>`;
  microregions.sort().forEach((microregion) => {
    microregionsBuffer +=
      `<option value="${microregion}">${microregion}</option>`;
  });
  $('#select-microregion').html(microregionsBuffer);
  if (microregions.length > 0) {
    $('.select-microregion').removeClass('d-none');
  }
};

const uniqFilter = (value, index, self) => {
  return self.indexOf(value) === index;
};

function formatNumber(value, dimension='') {
  let valor = new Intl.NumberFormat('pt-BR').format(value);
  if (dimension == 'pib_per_capita') {
    return "R$"+valor;
  } else if (["proporcao_idosos", "proporcao_inscritos","taxa_urbanizacao", "populacao_ocupada", "populacao_dependente_sus","populacao_coberta_atencao_basic"].includes(dimension)){
    return valor+"%";
  } else if (["casos_confirmados", "mortes"].includes(dimension)) {
    return new Intl.NumberFormat('pt-BR').format(parseInt(value));
  } else {
    return valor;
  }
}

function isIntegerValue(value){
  return value % 1 == 0
}

const Autosuggest = {
  compareTypeaheadBloodhound: (element) => {
    $(element).off('typeahead:select');
    $(element).on('typeahead:select', (ev, suggestion) => {
      Compare.add(suggestion);
      if (currentPage != 'compare') {
        goCompare();
      }
    });

    let municipalities_ids = []
    for (i = 1; i < 4; i++) {
      municipalities_ids.push(municipalities[i].id);
    }
    municipalities_ids = municipalities_ids.filter(x => x !== undefined);
    const generalSearch = new Bloodhound({
      datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
      queryTokenizer: Bloodhound.tokenizers.whitespace,
      remote: {
        url: HOST + "/api/v1/dynamic_search/?nome=%QUERY&cluster=" + markedCluster + "&municipalities_ids=" + municipalities_ids,
        wildcard: '%QUERY',
        rateLimitWait: 600,
        limit: 10,
      },
    });
    $(element).typeahead('destroy');
    $(element).typeahead({
      hint: false,
      highlight: true,
      minLength: 3,
      autoSelect: true,
    }, {
      name: 'cities',
      display: 'nome',
      limit: 10,
      source: generalSearch.ttAdapter(),
    });
    $(element).typeahead('val', '');
  },
  stateTypeaheadBloodhound: (element, state) => {
    $(element).off('typeahead:select');
    $(element).on('typeahead:select', (ev, suggestion) => {
      Compare.add(suggestion);
      if (currentPage != 'compare') {
        goCompare();
      }
    });

    const generalSearch = new Bloodhound({
      datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
      queryTokenizer: Bloodhound.tokenizers.whitespace,
      remote: {
        url: HOST + "/api/v1/dynamic_search/?nome=%QUERY&state=" + state,
        wildcard: '%QUERY',
        rateLimitWait: 600,
        limit: 10,
      },
    });
    $(element).typeahead('destroy');
    $(element).typeahead({
      hint: false,
      highlight: true,
      minLength: 3,
      autoSelect: true,
    }, {
      name: 'cities',
      display: 'nome',
      limit: 10,
      source: generalSearch.ttAdapter(),
    });
    $(element).typeahead('val', '');
  },
  destroy: (element) => {
    $(element).typeahead('destroy');
  },
};

const Cities = {
  all: async (queryParam) => {
    response = await $.ajax({
      url: HOST + '/api/v1/municipalities?' + Object.keys(queryParam)[0] + '=' + Object.values(queryParam)[0],
    });
    return response;
  },
};

var svg = d3.select('#map')
var g = svg.append('g')
var gPolygons = g.append('g')
var gTexts = g.append('g')
var gScale = svg.append('g')
var options = { sortField: 'ivm', sortDesc: true }
var tooltip = d3.select('.map').insert('div').classed('tooltip', true).style('opacity', 0)

const nome = (d) => d.properties.nome
const codarea = (d) => d.properties.codigo_ibge
const lastUpdate = (d) => d.properties.ultima_atualizacao_formatado
const state = (d) => d.properties.estado
const confirmed = (d) => d.properties.casos_confirmados || 0
const deaths = (d) => d.properties.mortes || 0
const populacao = (d) => d.properties.populacao
const populacaoF = (d) => formatN(d.properties.populacao || 0);
const xValues = (dimension, data) => data.map((d) => getDimensionValue(dimension, d));
const xReferenceValues = (dimension, data) => data.map((d) => getReferenceValue(dimension, d));
const xValuesFromCase = (dimension, data) => data.map((d) => getDimensionCaseValue(dimension, d));
const formatN = (str) => d3.format(',')(str).replace(/,/g, '.')
const getDimensionValue = (dimension, d) => {
  if (['referencia_internacoes', 'referencia_exames'].includes(dimension)) {
    return d.properties[dimension]
  } else {
    return parseFloat(d.properties[dimension] || 0);
  }
}
const getReferenceValue = (dimension, d) => d.properties[dimension];
const getDimensionValue2 = (dimension, d) => {
  if (['referencia_internacoes', 'referencia_exames'].includes(dimension)) {
    return d.properties[dimension] || undefined
  } else {
    return parseFloat(d.properties[dimension] || undefined);
  }
}
const getDimensionCaseValue = (dimension, d) => {
  if (['referencia_internacoes', 'referencia_exames'].includes(dimension)) {
    return d.properties[dimension] || undefined
  } else {
    return parseFloat(d[dimension]);
  }
}
const getFormattedDimensionValue = (dimension, d) => d.properties[`${dimension}_formatado`] || 'N/D';
const hideTooltip = () => tooltip.transition().duration(1000).style('opacity', 0)

const showTooltip = (mountTextTooltip, dimension) => (d, i, nodes) => {
  tooltip.transition().style('opacity', 0.9)
    .style('left', () => {
      if (d3.event.type === 'mouseover') return (d3.event.pageX - 90) + 'px'
      if (nodes && nodes[i] && nodes[i].nodeName === 'path') {
        const { x, width } = nodes[i].getBBox()
        return `${x + width}px`
      }
      return '50%'
    })
    .style('top', () => {
      if (d3.event.type === 'mouseover') return (d3.event.pageY - 320) + 'px'
      if (nodes && nodes[i] && nodes[i].nodeName === 'path') {
        const { y, height } = nodes[i].getBBox()
        return `${y + height}px`
      }
      return '50%'
    })
  tooltip.html(mountTextTooltip(d, dimension, i, nodes))
}

const mountTable = (data, dimension) => {
  const val = (d) => d.properties[options.sortField]
  data = data.filter((data) => data.properties.hasOwnProperty('id'));

  const localData = data.sort((a, b) => options.sortDesc ? val(b) - val(a) : val(a) - val(b));

  if (dimension == 'referencia_internacoes' || dimension == 'referencia_exames') {
    d3.select('#heat-map').select('.table-content-h6').style('display', 'none');
    const totalSim = data.filter((d) => getReferenceValue(dimension, d) == 'Sim');
    const totalNao = data.filter((d) => getReferenceValue(dimension, d) == 'Não');
    d3.select('#heat-map').select('.table-content-sim-nao').select('.total-rows-sim').text(new Intl.NumberFormat('pt-BR').format(totalSim.length));
    d3.select('#heat-map').select('.table-content-sim-nao').select('.total-rows-nao').text(new Intl.NumberFormat('pt-BR').format(totalNao.length));
    d3.select('#heat-map').select('.table-content-sim-nao').style('display', 'block');
  } else {
    d3.select('#heat-map').select('.table-content-sim-nao').style('display', 'none');
    let totalRows = new Intl.NumberFormat('pt-BR').format(data.length);
    d3.select('#heat-map').select('.table-content-h6').select('.total-rows').text(totalRows);
    d3.select('#heat-map').select('.table-content-h6').style('display', 'block');
  }
  d3.select('#tbl').style('display', 'table');
  d3.select('#th-dynamic').text($(`option[value=${dimension}]`).text());
  const trsEnter = d3.select('#tbl').select('tbody').selectAll('tr')
    .data(localData, codarea).enter().append('tr')

  trsEnter.append('td').classed('local', true).text(nome)
  if (['referencia_internacoes', 'referencia_exames'].includes(dimension)) {
    trsEnter.append('td').text((d) => getReferenceValue(dimension, d));
  } else {
    trsEnter.append('td').text((d) => getFormattedDimensionValue(dimension, d));
  }

  d3.select('#tbl').select('tbody').selectAll('tr').on('click', (d) => {
    getCityData(d.properties.id);
  });

  const trs = d3.select('#tbl').select('tbody').selectAll('tr')
  trs.selectAll('td.local').text(nome)
  trs.selectAll('td.state').text(state)
};

const zoomCtl = (g, mapBounds) => {
  const zoom = d3.zoom()
    .on('zoom', () => { g.attr('transform', d3.event.transform) })
    .scaleExtent([1, 15])
    .translateExtent(mapBounds)
  svg.call(zoom)
}

const mountTotals = (data) => {
  const val = (d) => new Date(d.properties.data_atualizacao.split('T')[0].replace(/-/g, '/'));
  const ordenedData = data.filter((data) => !$.isEmptyObject(data.properties.data_atualizacao)).sort((a, b) => val(b) - val(a));
  let confirmedTotalF = 0;
  let deathsTotalF = 0;
  let lastUpdateDateF = 'Sem dados até o momento';
  let confirmedPerMilF = 0;
  let deathsPerMilF = 0;
  if (ordenedData.length > 0) {
    const populacaoTotal = ordenedData.map(populacao).reduce((accum, i) => accum + i, 0);
    const confirmedTotal = ordenedData.map(confirmed).reduce((accum, i) => accum + i, 0);
    const deathsTotal = ordenedData.map(deaths).reduce((accum, i) => accum + i, 0);
    if (ordenedData[0].properties.data_atualizacao) {
      lastUpdateDateF = `Última atualização em ${ordenedData[0].properties.data_atualizacao_formatado}`;
    }
    const confirmedPerMil = (parseFloat(confirmedTotal) / parseFloat(populacaoTotal)) * 1000.0;
    const deathsPerMil = (parseFloat(deathsTotal) / parseFloat(populacaoTotal)) * 1000.0;

    confirmedTotalF = new Intl.NumberFormat('pt-BR').format(confirmedTotal);
    deathsTotalF = new Intl.NumberFormat('pt-BR').format(deathsTotal);
    confirmedPerMilF = new Intl.NumberFormat('pt-BR', { maximumFractionDigits: 2, minimumFractionDigits: 2 }).format(confirmedPerMil.toFixed(2));
    deathsPerMilF = new Intl.NumberFormat('pt-BR', { maximumFractionDigits: 2, minimumFractionDigits: 2 }).format(deathsPerMil.toFixed(2));
  }

  d3.select('.covid-data').select('.confirmed').text(confirmedTotalF);
  d3.select('.covid-data').select('.deaths').text(deathsTotalF);
  d3.select('.covid-data').select('.confirmed_mil').text(confirmedPerMilF);
  d3.select('.covid-data').select('.deaths_mil').text(deathsPerMilF);
  d3.select('.covid-data').select('.lastUpdate').text(lastUpdateDateF);
}

const renderMap = (data, dimension, mountTextTooltip) => {
  const width = svg.attr('viewBox').split(' ')[2];
  const height = svg.attr('viewBox').split(' ')[3];
  const projection = d3.geoMercator()
    .fitSize([width, height], { type: 'FeatureCollection', features: data });
  const path = d3.geoPath(projection);

  mountPaths(data, path, dimension, mountTextTooltip, xValues(dimension, data));
  zoomCtl(g, path.bounds({ type: 'FeatureCollection', features: data }));
  if (['casos_confirmados', 'mortes', 'confirmados_por_mil', 'obitos_por_mil'].includes(dimension)) {
    paintScale(xValues(dimension, data), dimension);
  }
  mountTotals(data);
  mountTable(data, dimension);
  manageLoading(false);
  if (!['casos_confirmados', 'mortes', 'confirmados_por_mil', 'obitos_por_mil'].includes(dimension)) {
    $('#heat-map .graph-legend').addClass('d-none');
    $(`#${dimension}_legend`).removeClass('d-none');
  }
};

const escalasCovid = (dimension) => {
  if (dimension == 'mortes') {
    return [0, 5, 20, 40, 100];
  } else if (dimension == 'casos_confirmados') {
    return [0, 20, 50, 100, 1000];
  } else if (dimension == 'obitos_por_mil') {
    return [0, 0.1, 0.2, 0.3, 0.4];
  } else { //confirmados_por_mil
    return [0, 1.0, 2.0, 4.0, 6.0];
  }
}

// Escalas de cores e legendas para o mapa
const mountPaths = (data, path, dimension, mountTooltip, xValues) => {
  // let sets = d3.scaleLinear().domain([1, 6]).range([d3.min(xValues), d3.max(xValues)]);
  let sets = escalasCovid(dimension);
  const faixaCor = faixaCorSelector(dimension);
  gPolygons.selectAll('path').data(data, codarea).enter()
    .append('path')
    .attr('d', path)
    .attr('tabindex', 0)
    .attr('class', 'st2')
    .style('fill', (d) => faixaCor(getDimensionValue2(dimension, d), false, sets))
    .on('mouseover', showTooltip(mountTooltip, dimension))
    .on('mouseout', hideTooltip)
    .on('focus', showTooltip(mountTooltip, dimension))
    .on('blur', hideTooltip);

  gPolygons.selectAll('path').on('click', (d) => {
    showTooltip(mountTooltip, dimension)(d);
  });
};

const paintScale = (xValues, dimension) => {
  const faixaCor = faixaCorSelector(dimension);
  const faixaEscala = faixaEscalaSelector(dimension);
  // let sets = d3.scaleLinear().domain([1, 6]).range([d3.min(xValues), d3.max(xValues)]);
  let sets = escalasCovid(dimension);
  const steps = [
    xValues.filter((value) => value > sets[4])[0],
    xValues.filter((value) => value > sets[3] && value <= sets[4])[0],
    xValues.filter((value) => value > sets[2] && value <= sets[3])[0],
    xValues.filter((value) => value > sets[1] && value <= sets[2])[0],
    xValues.filter((value) => value > 0 && value <= sets[1])[0],
    0,
  ].filter((value) => value != undefined);

  let htmlBuffer = '';
  steps.forEach((item) => {
    htmlBuffer += `
    <span class='${faixaCor(item, true, sets)}'>
      ${faixaEscala(item, sets)}
    </span>`;
  });

  $('#covid_legend').html(htmlBuffer);
  $('#heat-map .graph-legend').addClass('d-none');
  $('#covid_legend').removeClass('d-none');
};

const faixaCorSelector = (dimension) => {
  switch (dimension) {
    case 'mortes':
    case 'casos_confirmados':
    case 'confirmados_por_mil':
    case 'obitos_por_mil':
      return faixaCorCovid;
      break;
    case 'proporcao_idosos':
      return faixaCorPopulacaoIdosa;
      break;
    case 'proporcao_inscritos':
      return faixaCorInscritaCadUnico;
      break;
    case 'internacoes_doencas':
      return faixaCorInternacoesDoencas;
      break;
    case 'densidade_demografica':
      return faixaCorDensidadeDemografica;
      break;
    case 'taxa_urbanizacao':
      return faixaCorTaxaUrbanizacao;
      break;
    case 'pib_per_capita':
      return faixaCorPibPerCapita;
      break;
    case 'populacao_ocupada':
      return faixaCorPopulacaoOcupada;
      break;
    case 'salario_medio':
      return faixaCorSalarioMedio;
    case 'leitos_hospitalares':
      return faixaCorLeitosHospitalares;
      break;
    case 'leitos_uti':
      return faixaCorLeitosUTI;
      break;
    case 'ventiladores_respirados_disponiveis':
      return faixaCorVentiladoresRespiradores;
      break;
    case 'populacao_dependente_sus':
      return faixaCorPopSUS;
      break;
    case 'referencia_exames':
    case 'referencia_internacoes':
      return faixaCorNecessidadeReferencia;
      break;
    case 'populacao_coberta_atencao_basica':
      return faixaCorPopCobertaBasica;
      break;
    case 'ifgf_autonomia_fiscal':
    case 'ifgf_investimentos':
    case 'ifgf_gastos_pessoais':
      return faixaCorIfgf;
      break;
    default:
      return faixaCorIVM;
  }
};

const faixaEscalaSelector = (dimension) => {
  switch (dimension) {
    case 'mortes':
      return faixaEscalaCovidObito;
      break;
    case 'casos_confirmados':
      return faixaEscalaCovidCasos;
      break;
    case 'obitos_por_mil':
      return faixaEscalaCovidDeathsPerMil;
      break;
    default:
      return faixaEscalaCovidPerMil;
  }
};

const faixaEscalaCovidPerMil = (valor, sets = []) => {
  if (valor > 0.0 && valor <= sets[1]) {
    return `Abaixo de ${new Intl.NumberFormat('pt-BR', { maximumFractionDigits: 2, minimumFractionDigits: 2 }).format(sets[1].toFixed(2))}`;
  } else if (valor > sets[1] && valor <= sets[2]) {
    return `Entre ${new Intl.NumberFormat('pt-BR', { maximumFractionDigits: 2, minimumFractionDigits: 2 }).format(sets[1].toFixed(2))} e ${new Intl.NumberFormat('pt-BR', { maximumFractionDigits: 2, minimumFractionDigits: 2 }).format(sets[2].toFixed(2))}`;
  } else if (valor > sets[2] && valor <= sets[3]) {
    return `Entre ${new Intl.NumberFormat('pt-BR', { maximumFractionDigits: 2, minimumFractionDigits: 2 }).format(sets[2].toFixed(2))} e ${new Intl.NumberFormat('pt-BR', { maximumFractionDigits: 2, minimumFractionDigits: 2 }).format(sets[3].toFixed(2))}`;
  } else if (valor > sets[3] && valor <= sets[4]) {
    return `Entre ${new Intl.NumberFormat('pt-BR', { maximumFractionDigits: 2, minimumFractionDigits: 2 }).format(sets[3].toFixed(2))} e ${new Intl.NumberFormat('pt-BR', { maximumFractionDigits: 2, minimumFractionDigits: 2 }).format(sets[4].toFixed(2))}`;
  } else if (valor > sets[4]) {
    return `Maior que ${new Intl.NumberFormat('pt-BR', { maximumFractionDigits: 2, minimumFractionDigits: 2 }).format(sets[4].toFixed(2))}`;
  } else {
    return 'Sem casos confirmados';
  }
};

const faixaEscalaCovidDeathsPerMil = (valor, sets = []) => {
  if (valor > 0.0 && valor <= sets[1]) {
    return `Abaixo de ${new Intl.NumberFormat('pt-BR', { maximumFractionDigits: 2, minimumFractionDigits: 2 }).format(sets[1].toFixed(2))}`;
  } else if (valor > sets[1] && valor <= sets[2]) {
    return `Entre ${new Intl.NumberFormat('pt-BR', { maximumFractionDigits: 2, minimumFractionDigits: 2 }).format(sets[1].toFixed(2))} e ${new Intl.NumberFormat('pt-BR', { maximumFractionDigits: 2, minimumFractionDigits: 2 }).format(sets[2].toFixed(2))}`;
  } else if (valor > sets[2] && valor <= sets[3]) {
    return `Entre ${new Intl.NumberFormat('pt-BR', { maximumFractionDigits: 2, minimumFractionDigits: 2 }).format(sets[2].toFixed(2))} e ${new Intl.NumberFormat('pt-BR', { maximumFractionDigits: 2, minimumFractionDigits: 2 }).format(sets[3].toFixed(2))}`;
  } else if (valor > sets[3] && valor <= sets[4]) {
    return `Entre ${new Intl.NumberFormat('pt-BR', { maximumFractionDigits: 2, minimumFractionDigits: 2 }).format(sets[3].toFixed(2))} e ${new Intl.NumberFormat('pt-BR', { maximumFractionDigits: 2, minimumFractionDigits: 2 }).format(sets[4].toFixed(2))}`;
  } else if (valor > sets[4]) {
    return `Maior que ${new Intl.NumberFormat('pt-BR', { maximumFractionDigits: 2, minimumFractionDigits: 2 }).format(sets[4].toFixed(2))}`;
  } else {
    return 'Sem óbitos confirmados';
  }
};

const faixaEscalaCovidCasos = (valor, sets = []) => {
  if (valor > 0 && valor <= sets[1]) {
    return `Abaixo de ${new Intl.NumberFormat('pt-BR').format(parseInt(sets[1]))}`;
  } else if (valor > sets[1] && valor <= sets[2]) {
    return `Entre ${new Intl.NumberFormat('pt-BR').format(parseInt(sets[1]))} e ${new Intl.NumberFormat('pt-BR').format(parseInt(sets[2]))}`;
  } else if (valor > sets[2] && valor <= sets[3]) {
    return `Entre ${new Intl.NumberFormat('pt-BR').format(parseInt(sets[2]))} e ${new Intl.NumberFormat('pt-BR').format(parseInt(sets[3]))}`;
  } else if (valor > sets[3] && valor <= sets[4]) {
    return `Entre ${new Intl.NumberFormat('pt-BR').format(parseInt(sets[3]))} e ${new Intl.NumberFormat('pt-BR').format(parseInt(sets[4]))}`;
  } else if (valor > sets[4]) {
    return `Maior que ${new Intl.NumberFormat('pt-BR').format(parseInt(sets[4]))}`;
  } else {
    return 'Sem casos confirmados';
  }
};

const faixaEscalaCovidObito = (valor, sets = []) => {
  if (valor > 0 && valor <= sets[1]) {
    return `Abaixo de ${new Intl.NumberFormat('pt-BR').format(parseInt(sets[1]))}`;
  } else if (valor > sets[1] && valor <= sets[2]) {
    return `Entre ${new Intl.NumberFormat('pt-BR').format(parseInt(sets[1]))} e ${new Intl.NumberFormat('pt-BR').format(parseInt(sets[2]))}`;
  } else if (valor > sets[2] && valor <= sets[3]) {
    return `Entre ${new Intl.NumberFormat('pt-BR').format(parseInt(sets[2]))} e ${new Intl.NumberFormat('pt-BR').format(parseInt(sets[3]))}`;
  } else if (valor > sets[3] && valor <= sets[4]) {
    return `Entre ${new Intl.NumberFormat('pt-BR').format(parseInt(sets[3]))} e ${new Intl.NumberFormat('pt-BR').format(parseInt(sets[4]))}`;
  } else if (valor > sets[4]) {
    return `Maior que ${new Intl.NumberFormat('pt-BR').format(parseInt(sets[4]))}`;
  } else {
    return 'Sem óbitos confirmados';
  }
};

const faixaCorCovid = (valor, textStyled = false, sets = []) => {
  if (valor > 0 && valor <= sets[1]) {
    if (textStyled) {
      return 'covid1';
    } else {
      return '#f5c88a';
    }
  } else if (valor > sets[1] && valor <= sets[2]) {
    if (textStyled) {
      return 'covid2';
    } else {
      return '#F3AA47';
    }
  } else if (valor > sets[2] && valor <= sets[3]) {
    if (textStyled) {
      return 'covid3';
    } else {
      return '#ff7e00';
    }
  } else if (valor > sets[3] && valor <= sets[4]) {
    if (textStyled) {
      return 'covid4';
    } else {
      return '#DE5E57';
    }
  } else if (valor > sets[4]) {
    if (textStyled) {
      return 'covid5';
    } else {
      return '#df2a20';
    }
  } else {
    if (textStyled) {
      return 'cinza';
    } else {
      return '#9E9E9E';
    }
  }
};

const faixaCorIVM = (valor) => {
  if (valor > 0 && valor <= 35) {
    return '#7BB873';
  } else if (valor > 35 && valor <= 45) {
    return '#B4DC32';
  } else if (valor > 45 && valor <= 55) {
    return '#F3AA47';
  } else if (valor > 55 && valor <= 65) {
    return '#ff7e00';
  } else if (valor > 65) {
    return '#DE5E57';
  } else {
    return '#9E9E9E';
  }
};

const faixaCorPopulacaoIdosa = (valor) => {
  if (valor > 2.71 && valor <= 10) {
    return '#7BB873';
  } else if (valor > 10 && valor <= 20) {
    return '#B4DC32';
  } else if (valor > 20 && valor <= 30) {
    return '#F3AA47';
  } else if (valor > 30 && valor <= 40) {
    return '#ff7e00';
  } else if (valor > 40) {
    return '#DE5E57';
  } else {
    return '#9E9E9E';
  }
};

const faixaCorInscritaCadUnico = (valor) => {
  if (valor > 1.11 && valor <= 20) {
    return '#7BB873';
  } else if (valor > 20 && valor <= 40) {
    return '#B4DC32';
  } else if (valor > 40 && valor <= 60) {
    return '#F3AA47';
  } else if (valor > 60 && valor <= 80) {
    return '#ff7e00';
  } else if (valor > 80) {
    return '#DE5E57';
  } else {
    return '#9E9E9E';
  }
};

const faixaCorInternacoesDoencas = (valor) => {
  if (valor >= 0.34 && valor <= 5) {
    return '#7BB873';
  } else if (valor > 5 && valor <= 10) {
    return '#B4DC32';
  } else if (valor > 10 && valor <= 30) {
    return '#F3AA47';
  } else if (valor > 30 && valor <= 60) {
    return '#ff7e00';
  } else if (valor > 60) {
    return '#DE5E57';
  } else {
    return '#9E9E9E';
  }
};

const faixaCorDensidadeDemografica = (valor) => {
  if (valor <= 10) {
    return '#7BB873';
  } else if (valor > 10 && valor <= 20) {
    return '#B4DC32';
  } else if (valor > 20 && valor <= 50) {
    return '#F3AA47';
  } else if (valor > 50 && valor <= 1000) {
    return '#ff7e00';
  } else if (valor > 1000) {
    return '#DE5E57';
  } else {
    return '#9E9E9E';
  }
};

const faixaCorTaxaUrbanizacao = (valor) => {
  if (valor >= 4.18 && valor <= 20) {
    return '#7BB873';
  } else if (valor > 20 && valor <= 40) {
    return '#B4DC32';
  } else if (valor > 40 && valor <= 60) {
    return '#F3AA47';
  } else if (valor > 60 && valor <= 80) {
    return '#ff7e00';
  } else if (valor > 80 && valor <= 100) {
    return '#DE5E57';
  } else {
    return '#9E9E9E';
  }
};

const faixaCorPibPerCapita = (valor) => {
  if (valor >= 100000) {
    return '#7BB873';
  } else if (valor > 50000 && valor <= 100000) {
    return '#B4DC32';
  } else if (valor > 20000 && valor <= 50000) {
    return '#F3AA47';
  } else if (valor > 10000 && valor <= 20000) {
    return '#ff7e00';
  } else if (valor <= 10000) {
    return '#DE5E57';
  } else {
    return '#9E9E9E';
  }
};

const faixaCorPopulacaoOcupada = (valor) => {
  if (valor > 50) {
    return '#7BB873';
  } else if (valor > 30 && valor <= 50) {
    return '#B4DC32';
  } else if (valor > 20 && valor <= 30) {
    return '#F3AA47';
  } else if (valor > 10 && valor <= 20) {
    return '#ff7e00';
  } else if (valor <= 10) {
    return '#DE5E57';
  } else {
    return '#9E9E9E';
  }
};

const faixaCorSalarioMedio = (valor) => {
  if (valor > 4) {
    return '#7BB873';
  } else if (valor > 3.0 && valor <= 4.0) {
    return '#B4DC32';
  } else if (valor > 2.0 && valor <= 3.0) {
    return '#F3AA47';
  } else if (valor > 1.0 && valor <= 2.0) {
    return '#ff7e00';
  } else if (valor <= 1.0) {
    return '#DE5E57';
  } else {
    return '#9E9E9E';
  }
};

const faixaCorIfgf = (valor) => {
  if (valor >= 0.8) {
    return '#7BB873';
  } else if (valor < 0.8 && valor >= 0.6) {
    return '#B4DC32';
  } else if (valor < 0.6 && valor >= 0.4) {
    return '#F3AA47';
  } else if (valor < 0.4 && valor >= 0.2) {
    return '#ff7e00';
  } else if (valor < 0.2) {
    return '#DE5E57';
  } else {
    return '#9E9E9E';
  }
};

const faixaCorPopCobertaBasica = (valor) => {
  if (valor > 80) {
    return '#7BB873';
  } else if (valor <= 80 && valor > 60) {
    return '#B4DC32';
  } else if (valor <= 60 && valor > 40) {
    return '#F3AA47';
  } else if (valor <= 40 && valor > 20) {
    return '#ff7e00';
  } else if (valor <= 20) {
    return '#DE5E57';
  } else {
    return '#9E9E9E';
  }
};

const faixaCorNecessidadeReferencia = (valor) => {
  if (valor == 'Sim') {
    return '#DE5E57';
  } else if (valor == 'Não') {
    return '#7BB873';
  } else {
    return '#9E9E9E';
  }
};

const faixaCorPopSUS = (valor) => {
  if (valor > 84) {
    return '#DE5E57';
  } else if (valor <= 84 && valor > 71) {
    return '#ff7e00';
  } else if (valor <= 71 && valor > 58) {
    return '#F3AA47';
  } else if (valor <= 58 && valor > 45) {
    return '#B4DC32';
  } else if (valor <= 45) {
    return '#7BB873';
  } else {
    return '#9E9E9E';
  }
};

const faixaCorVentiladoresRespiradores = (valor) => {
  if (valor > 60) {
    return '#7BB873';
  } else if (valor <= 60 && valor > 40) {
    return '#B4DC32';
  } else if (valor <= 40 && valor > 20) {
    return '#F3AA47';
  } else if (valor <= 20 && valor > 0) {
    return '#ff7e00';
  } else if (valor == 0) {
    return '#DE5E57';
  } else {
    return '#9E9E9E';
  }
};

const faixaCorLeitosUTI = (valor) => {
  if (valor > 30) {
    return '#7BB873';
  } else if (valor <= 30 && valor > 20) {
    return '#B4DC32';
  } else if (valor <= 20 && valor > 10) {
    return '#F3AA47';
  } else if (valor <= 10 && valor > 0) {
    return '#ff7e00';
  } else if (valor == 0) {
    return '#DE5E57';
  } else {
    return '#9E9E9E';
  }
};

const faixaCorLeitosHospitalares = (valor) => {
  if (valor > 40) {
    return '#7BB873';
  } else if (valor <= 40 && valor > 30) {
    return '#B4DC32';
  } else if (valor <= 30 && valor > 20) {
    return '#F3AA47';
  } else if (valor <= 20 && valor > 10) {
    return '#ff7e00';
  } else if (valor <= 10) {
    return '#DE5E57';
  } else {
    return '#9E9E9E';
  }
};

var chartsArray = [];
var chart = null;
const drawCardEmpty = (element, idx, municipio) => {
  element.removeClass('hidden');
  element.addClass('empty');
  manageCardActions(element, idx, municipio);
};

const drawCardHeader = (element, idx, municipio) => {
  element.removeClass('hidden');
  element.find('.header .title').html(municipio.nome_sem_formato);
  element.find('.header .subtitle').html(municipio.estado);
  manageCardActions(element, idx, municipio);
};

const manageCardActions = (element, idx, municipio) => {
  element.find('.content .actions').data('idx', idx);
  if ($.isEmptyObject(municipio)) {
    element.find('.content .actions .remove').remove();
  } else {
    element.find('.content .actions .add').remove();
  }
};

const drawCardGeneral = (groupTemplate, element, municipio) => {
  const newGroup = groupTemplate.clone(true);
  newGroup.removeClass('hidden');
  newGroup.find('.group-title').html('Dados Gerais');
  newGroup.find('.group-subtitle').remove();
  let buffer = '<ul>';
  buffer += `<li><span>IVM</span><span class=text_${municipio.ivm_cor}>${municipio.ivm_formatado}</span></li>`;
  buffer += '<li><span>Microrregião</span><span>' + municipio.microrregiao + '</span></li>';
  buffer += '<li><span>População 2019</span><span>' + municipio.populacao_formatado + '</span></li>';
  buffer += '<li><span>Grupo Populacional</span><span>' + municipio.faixa_populacional + '</span></li>';
  buffer += '</ul>';
  newGroup.append(buffer);
  element.find('.content').append(newGroup);
};

const drawCardIVMs = (groupTemplate, element, municipio, index) => {
  const newGroup = groupTemplate.clone(true);
  newGroup.removeClass('hidden');
  newGroup.find('.group-title').html('Indicadores do IVM');
  newGroup.find('.group-subtitle').remove();
  let buffer = `<div class="accordion" id="collapsePilar${index}">`;
  buffer += `<div class="card"><div class="card-header" id="header${index}Pilar1"><button data-toggle="collapse" data-target=".pilar1" role="button" aria-expanded="false" aria-controls="pilar1"><span>1. População Vulnerável</span><span>${municipio.ivm_populacao_vulneravel_formatado}</span></button></div>`;
  buffer += `<div class="pilar1 collapse" aria-labelledby="header${index}Pilar1" data-parent="#collapsePilar${index}"><ul>`;
  buffer += `<li><span>1.1 Proporção de população idosa</span><span>${municipio.proporcao_idosos_formatado}</span></li>`;
  buffer += `<li><span>1.2 Proporção da população inscrita no Cadastro Único</span><span>${municipio.proporcao_inscritos_formatado}</span></li>`;
  buffer += `<li><span>1.3 Internações por doenças sensíveis ao COVID-19 por mil hab.</span><span>${municipio.internacoes_doencas_formatado}</span></li>`;
  buffer += `<li><span>1.4 Densidade demográfica</span><span>${municipio.densidade_demografica_formatado}</span></li>`;
  buffer += `<li><span>1.5 Taxa de urbanização</span><span>${municipio.taxa_urbanizacao_formatado}</span></li>`;
  buffer += '</ul></div></div>';
  buffer += `<div class="card"><div class="card-header" id="header${index}Pilar2"><button data-toggle="collapse" data-target=".pilar2" role="button" aria-expanded="false" aria-controls="pilar2">2. Economia local</span><span>${municipio.ivm_economia_local_formatado}</span></button></div>`;
  buffer += `<div class="pilar2 collapse" aria-labelledby="header${index}Pilar2" data-parent="#collapsePilar${index}"><ul>`;
  buffer += `<li><span>2.1 PIB per capita</span><span>${municipio.pib_per_capita_formatado}</span></li>`;
  buffer += `<li><span>2.2 Proporção da população ocupada (%)</span><span>${municipio.populacao_ocupada_formatado}</span></li>`;
  buffer += `<li><span>2.3 Salário médio mensal dos trabalhadores formais (em salários mínimos)</span><span>${municipio.salario_medio_formatado}</span></li>`;
  buffer += '</ul></div></div>';
  buffer += `<div class="card"><div class="card-header" id="header${index}Pilar3"><button data-toggle="collapse" data-target=".pilar3" role="button" aria-expanded="false" aria-controls="pilar3">3. Estrutura do sistema de saúde</span><span>${municipio.ivm_estrutura_sistema_saude_formatado}</span></button></div>`;
  buffer += `<div class="pilar3 collapse" aria-labelledby="header${index}Pilar3" data-parent="#collapsePilar${index}"><ul>`;
  buffer += `<li><span>3.1 Leitos hospitalares na microrregião por 10 mil hab</span><span>${municipio.leitos_hospitalares_formatado}</span></li>`;
  buffer += `<li><span>3.2 Leitos de UTI na microrregião por 100 mil hab</span><span>${municipio.leitos_uti_formatado}</span></li>`;
  buffer += `<li><span>3.3 Ventilador e respirados na microrregião por 100 mil hab</span><span>${municipio.ventiladores_respirados_disponiveis_formatado}</span></li>`;
  buffer += '</ul></div></div>';
  buffer += `<div class="card"><div class="card-header" id="header${index}Pilar4"><button data-toggle="collapse" data-target=".pilar4" role="button" aria-expanded="false" aria-controls="pilar4">4. Organização do sistema de saúde</span><span>${municipio.ivm_organizacao_sistema_saude_formatado}</span></button></div>`;
  buffer += `<div class="pilar4 collapse" aria-labelledby="header${index}Pilar4" data-parent="#collapsePilar${index}"><ul>`;
  buffer += `<li><span>4.1 Proporção da população dependente do sistema público de saúde</span><span>${municipio.populacao_dependente_sus_formatado}</span></li>`;
  buffer += `<li><span>4.2 Necessidade de referência - internações</span><span>${municipio.referencia_internacoes}</span></li>`;
  buffer += `<li><span>4.3 Necessidade de referência - exames</span><span>${municipio.referencia_exames}</span></li>`;
  buffer += `<li><span>4.4 Proporção da população coberta pela Atenção Básica</span><span>${municipio.populacao_coberta_atencao_basica_formatado}</span></li>`;
  buffer += '</ul></div></div>';
  buffer += `<div class="card"><div class="card-header" id="header${index}Pilar5"><button data-toggle="collapse" data-target=".pilar5" role="button" aria-expanded="false" aria-controls="pilar5">5. Capacidade fiscal administração municipal</span><span>${municipio.ivm_capacidade_fiscal_formatado}</span></button></div>`;
  buffer += `<div class="pilar5 collapse" aria-labelledby="header${index}Pilar5" data-parent="#collapsePilar${index}"><ul>`;
  buffer += `<li><span>5.1 IFGF autonomia fiscal</span><span>${municipio.ifgf_autonomia_fiscal_formatado}</span></li>`;
  buffer += `<li><span>5.2 IFGF investimentos</span><span>${municipio.ifgf_investimentos_formatado}</span></li>`;
  buffer += `<li><span>5.3 IFGF gastos com pessoal</span><span>${municipio.ifgf_gastos_pessoais_formatado}</span></li>`;
  buffer += '</ul></div></div>';
  buffer += '</div>';
  newGroup.append(buffer);
  element.find('.content').append(newGroup);
};

const drawCardCovid = (groupTemplate, element, municipio) => {
  const newGroup = groupTemplate.clone(true);
  newGroup.removeClass('hidden');
  newGroup.find('.group-title').html('Dados da Covid-19');
  let buffer = '<ul>';
  if (municipio.tem_covid) {
    newGroup.find('.group-subtitle').html('Última atualização em ' + municipio.data_atualizacao_formatado);
    buffer += `<li><span>Casos Confirmados</span><span>${municipio.casos_confirmados_formatado}</span></li>`;
    buffer += `<li><span>Confirmados - por mil hab.</span><span>${municipio.confirmados_por_mil_formatado}</span></li>`;
    buffer += `<li><span>Óbitos</span><span>${municipio.mortes_formatado}</span></li>`;
    buffer += `<li><span>Óbitos - por mil hab.</span><span>${municipio.obitos_por_mil_formatado}</span></li>`;
  } else {
    newGroup.find('.group-subtitle').html('Sem dados até o momento');
    buffer += '<li><span>Casos Confirmados</span><span>-</span></li>';
    buffer += `<li><span>Confirmados - por mil hab.</span><span>-</span></li>`;
    buffer += '<li><span>Óbitos</span><span>-</span></li>';
    buffer += `<li><span>Óbitos - por mil hab.</span><span>-</span></li>`;
  }
  buffer += '</dl>';
  newGroup.append(buffer);
  element.find('.content').append(newGroup);
};

const drawCards = () => {
  $('#compare .municipalities-area').html('');
  const template = $('.box-template');
  const groupTemplate = $('.group-template');
  for (const index in municipalities) {
    const municipio = municipalities[index];
    const new_copy = template.clone(true);
    if ($.isEmptyObject(municipio)) {
      drawCardEmpty(new_copy, index, municipio);
    } else {
      drawCardHeader(new_copy, index, municipio);
      drawCardGeneral(groupTemplate, new_copy, municipio);
      drawCardIVMs(groupTemplate, new_copy, municipio, index);
      drawCardCovid(groupTemplate, new_copy, municipio);
    }

    $('#compare .municipalities-area').append(new_copy);
  }
  let maxHeight = 0;
  $('#compare .box-template .header .title').each(function () {
    if ($(this).height() > maxHeight) {
      maxHeight = $(this).height();
    }
  });
  $('#compare .box-template .header .title').css('min-height', maxHeight);
};

const refresh = () => {
  drawCards();
  drawGraphs();
  if (modalAberto) manageModal(false);
};

const drawnProgressGraphs = () => {
  Object.keys(municipalities).filter((key) => {
    return jQuery.isEmptyObject(municipalities[key]);
  }).forEach((item) => {
    $('#ivm_cidade_' + item + '_label').addClass('d-none');
    $('#ivm_cidade_' + item + '_progress').addClass('d-none');
  });

  Object.keys(municipalities).filter((key) => {
    return !jQuery.isEmptyObject(municipalities[key]);
  }).forEach((item) => {
    $('#ivm_cidade_' + item + '_label')
      .removeClass('d-none')
      .text(municipalities[item].nome);
    $('#ivm_cidade_' + item + '_progress')
      .removeClass('d-none')
      .css('height', '30px');
    $('#ivm_cidade_' + item + '_progress .progress-bar')
      .attr('aria-valuenow', municipalities[item].ivm)
      .css('width', municipalities[item].ivm + '%')
      .addClass('bg_' + municipalities[item].ivm_cor)
      .text(municipalities[item].ivm_formatado);
  });
};

const drawnVerticalGraphs = () => {
  // População vunerável
  const proporcaoIdosos = document
    .getElementById('proporcao_idosos')
    .getContext('2d');
  generateVerticalBarchart(proporcaoIdosos, [
    'proporcao_idosos',
  ], 'Proporção de população idosa');

  const proporcaoInscritos = document
    .getElementById('proporcao_inscritos')
    .getContext('2d');
  generateVerticalBarchart(proporcaoInscritos, [
    'proporcao_inscritos',
  ], 'Proporção de população inscrita no cadastro único');

  const internacoesDoencas = document
    .getElementById('internacoes_doencas')
    .getContext('2d');
  generateVerticalBarchart(internacoesDoencas, [
    'internacoes_doencas',
  ], 'Internações por doenças sensíveis ao COVID-19 por mil hab');

  const densidadeDemografica = document
    .getElementById('densidade_demografica')
    .getContext('2d');
  generateVerticalBarchart(densidadeDemografica, [
    'densidade_demografica',
  ], 'Densidade demográfica');

  const taxaUrbanizacao = document
    .getElementById('taxa_urbanizacao')
    .getContext('2d');
  generateVerticalBarchart(taxaUrbanizacao, [
    'taxa_urbanizacao',
  ], 'Taxa de urbanização');

  // Economia Local
  const pibPerCapita = document
    .getElementById('pib_per_capita')
    .getContext('2d');
  generateVerticalBarchart(pibPerCapita, [
    'pib_per_capita',
  ], 'PIB per capita');

  const populacaoOcupada = document
    .getElementById('populacao_ocupada')
    .getContext('2d');
  generateVerticalBarchart(populacaoOcupada, [
    'populacao_ocupada',
  ], 'Proporção da população ocupada (%)');

  const salarioMedio = document
    .getElementById('salario_medio')
    .getContext('2d');
  generateVerticalBarchart(salarioMedio, [
    'salario_medio',
  ], 'Salário médio mensal dos trabalhadores formais (em salários mínimos)');

  // Estrutura do sistema de saúde
  const leitosHospitalares = document
    .getElementById('leitos_hospitalares')
    .getContext('2d');
  generateVerticalBarchart(leitosHospitalares, [
    'leitos_hospitalares',
  ], 'Leitos hospitalares na microrregião por 10 mil hab');

  const leitosUTI = document
    .getElementById('leitos_uti')
    .getContext('2d');
  generateVerticalBarchart(leitosUTI, [
    'leitos_uti',
  ], 'Leitos de UTI na microrregião por 100 mil hab');

  const ventiladoresRespiradosDisponiveis = document
    .getElementById('ventiladores_respirados_disponiveis')
    .getContext('2d');
  generateVerticalBarchart(ventiladoresRespiradosDisponiveis, [
    'ventiladores_respirados_disponiveis',
  ], 'Ventilador e respirados na microrregião por 100 mil hab');

  // Organização do sistema de saúde
  const populacaoDependenteSUS = document
    .getElementById('populacao_dependente_sus')
    .getContext('2d');
  generateVerticalBarchart(populacaoDependenteSUS, [
    'populacao_dependente_sus',
  ], 'Proporção da população dependente do sistema público de saúde');

  $('#referencia_internacoes').html(generateReferenciaHtml('internacoes'));

  $('#referencia_exames').html(generateReferenciaHtml('exames'));

  const populacaoCobertaAtencaoBasica = document
    .getElementById('populacao_coberta_atencao_basica')
    .getContext('2d');
  generateVerticalBarchart(populacaoCobertaAtencaoBasica, [
    'populacao_coberta_atencao_basica',
  ], 'Proporção da população coberta pela Atenção Básica');

  // capacidade fiscal adm publica
  const ifgfAutonomiaFiscal = document
    .getElementById('ifgf_autonomia_fiscal')
    .getContext('2d');
  generateVerticalBarchart(ifgfAutonomiaFiscal, [
    'ifgf_autonomia_fiscal',
  ], 'IFGF autonomia fiscal');

  const ifgfInvestimentos = document
    .getElementById('ifgf_investimentos')
    .getContext('2d');
  generateVerticalBarchart(ifgfInvestimentos, [
    'ifgf_investimentos',
  ], 'IFGF investimentos');

  const ifgfGastosPessoais = document
    .getElementById('ifgf_gastos_pessoais')
    .getContext('2d');
  generateVerticalBarchart(ifgfGastosPessoais, [
    'ifgf_gastos_pessoais',
  ], 'IFGF gastos com pessoal');


  $('#compare .graph-legend').html('');

  let html = '';

  Object.keys(municipalities).filter((key) => {
    return !jQuery.isEmptyObject(municipalities[key]);
  }).forEach((item) => {
    html += '<span id="' +
      item +
      '-city-legend">' +
      municipalities[item].nome +
      '</span>';
  });

  $('#compare .graph-legend').html(html);
};

const drawGraphs = () => {
  const municipalitiesLength = Object.keys(municipalities).filter((key) => {
    return !jQuery.isEmptyObject(municipalities[key]);
  }).length;

  if (municipalitiesLength >= 2) {
    $('#select-pilares').removeClass('d-none');
    $('.graphs-area').removeClass('d-none');
    drawnProgressGraphs();
    drawnVerticalGraphs();
  } else {
    $('#select-pilares').addClass('d-none');
    $('.graphs-area').addClass('d-none');
    $('#ivm_cidade_1_label').addClass('d-none');
    $('#ivm_cidade_1_progress').addClass('d-none');
    $('#ivm_cidade_2_label').addClass('d-none');
    $('#ivm_cidade_2_progress').addClass('d-none');
    $('#ivm_cidade_3_label').addClass('d-none');
    $('#ivm_cidade_3_progress').addClass('d-none');
  }
};

function generateReferenciaHtml(tipoReferencia) {
  let html = "";
  if (tipoReferencia == 'internacoes') {
    html = "<h1> Necessidade de referência - internações </h1>";
  } else {
    html = "<h1> Necessidade de referência - exames </h1>";
  }
  for (item = 1; item < 4; item++) {
    if (municipalities[item].id !== undefined) {
      if (tipoReferencia == 'internacao') {
        html += `<label> ${municipalities[item].nome} - ${municipalities[item].referencia_internacoes}</label>`;
      } else {
        html += `<label> ${municipalities[item].nome} - ${municipalities[item].referencia_exames}</label>`;
      }
    }
  }
  return html;
}
const generateVerticalBarchart = (element, ivmNames, tooltipTitle) => {
  const colors = [
    '#0000BF',
    '#4291db',
    '#06E3FF',
  ];

  const dataSet = (ivmNames, municipality, color, tooltipTitle) => {
    return {
      label: tooltipTitle,
      backgroundColor: colors[color],
      borderColor: colors[color],
      borderWidth: 1,
      data: ivmNames.map((ivm) => {
        return [municipality[ivm]];
      }),
      datalabels: {
        align: 'top',
        anchor: 'end',
      },
    };
  };

  const data = (ivmNames, tooltipTitle) => {
    return {
      labels: ivmNames,
      datasets: Object.keys(municipalities).filter((key) => {
        return !jQuery.isEmptyObject(municipalities[key]);
      }).map((key, i) => {
        const municipality = municipalities[key];
        return dataSet(ivmNames, municipality, i);
      }),
    };
  };

  const datalabelFormatter = (value, context) => {
    const i = context.datasetIndex + 1;
    const j = context.chart.config.data.labels + '_formatado';
    const formatedValue = municipalities[i][j];
    if (formatedValue) {
      return formatedValue;
    } else {
      return value;
    }
  };
  if (chartsArray.length == 16) {
    chartsArray.forEach(chart => chart.destroy());
    chartsArray = [];
  }
  chart = new Chart(element, {
    type: 'bar',
    data: data(ivmNames),
    options: {
      tooltips: {
        callbacks: {
          title: () => {
            return tooltipTitle;
          },
          label: (tooltipItem, data) => {
            const i = tooltipItem.datasetIndex + 1;
            const j = data.labels[0] + '_formatado';
            return municipalities[i][j];
          },
        },
      },
      layout: {
        padding: {
          top: 50,
          right: 0,
          bottom: 10,
          left: 0,
        },
      },
      plugins: {
        datalabels: {
          formatter: datalabelFormatter,
          color: 'black',
          font: { weight: 'bold' },
        },
      },
      title: { display: true, text: tooltipTitle, position: 'bottom' },
      legend: { display: false, labels: { display: false } },
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        xAxes: [{ display: false, gridLines: { display: false } }],
        yAxes: [{ display: false, ticks: { display: false, min: 0, beginAtZero: true } }],
      },
    },
  });
  chartsArray.push(chart);
};

const Compare = {
  new: () => {
    manageModal(true);
    var newSource = JSON.parse(JSON.stringify(responseCluster));
    for (var index in municipalities) {
      var municipio = municipalities[index];
      if (municipio.hasOwnProperty('id')) {
        var idx = newSource.findIndex(element => element.id == municipio.id);
        if (idx >= 0) newSource.splice(idx, 1);
      }
    }
    $('#city-search_cluster').show();
    $('#city-search_cluster').parent('.twitter-typeahead').show();
    Autosuggest.compareTypeaheadBloodhound('#city-search_cluster');
  },
  add: (city) => {
    for (const index in municipalities) {
      if ($.isEmptyObject(municipalities[index])) {
        municipalities[index] = city;
        break;
      }
    }
    refresh();
  },
  remove: (index) => {
    municipalities[index] = {};
    if (Object.values(municipalities).map((city) => $.isEmptyObject(city)).includes(false)) {
      refresh();
    } else {
      goHome();
    }
  },
};

$(document).off('click', '.add');
$(document).on('click', '.add', function () {
  Compare.new();
});

$(document).off('click', '.remove');
$(document).on('click', '.remove', function () {
  Compare.remove($(this).parent('.actions').data('idx'));
});

$('#select-pilares').on('change', () => {
  const newTab = $('#select-pilares').children('option:selected').val();
  $(newTab).tab('show');
});

/* SLIDER COMPARE */
const goRight = () => {
  if (translateValue <= 0 && translateValue > -64) {
    translateValue = translateValue - 32;
  }
  $('.municipalities-area').css({
    'transform': 'translate3d(' + translateValue + '%,0,0)',
  });
};

const goLeft = () => {
  if (translateValue < 0) {
    translateValue = translateValue + 32;
  }
  $('.municipalities-area').css({
    'transform': 'translate3d(' + translateValue + '%,0,0)',
  });
};

$('.arrow-left').on('click', function () {
  goLeft();
  steps(translateValue);
});

$('.arrow-right').on('click', function () {
  goRight();
  steps(translateValue);
});

function steps(value) {
  $('.steps span').removeClass('active');
  if (value == 0) {
    $('.steps span:nth-child(1)').addClass('active');
    $('.municipalities-area-container .arrow-left').hide();
  } else if (value == -32) {
    $('.steps span:nth-child(2)').addClass('active');
    $('.municipalities-area-container .arrow-left').show();
    $('.municipalities-area-container .arrow-right').show();
  } else if (value == -64) {
    $('.steps span:nth-child(3)').addClass('active');
    $('.municipalities-area-container .arrow-right').hide();
  }
}

$(document).delegate('.secao-mapa', 'click', function () {
  $('#selected-municipality').data('descricao', $(this).children().data('estado'));
  $('.secao-mapa').each(function () {
    $(this).find('path').css('fill', '#0C46E6');
  });
  $(this).find('path').css('fill', '#F3AA47');
  goSelectedState();
});
