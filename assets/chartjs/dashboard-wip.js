// declaring dashboard WIP
const wipFactory = document.getElementById('wip-factory').textContent
const wipGudang = document.getElementById('wip-gudang').textContent
const wipStore = document.getElementById('wip-store').textContent

Chart.defaults.font.size = 15
Chart.defaults.color = "#eaeaea"
Chart.defaults.borderColor = "#6c757d"

// dashboard TOTAL START
const data1 = {
  labels: [
    'WIP Factory',
    'WIP Gudang',
    'WIP Store',
  ],
  datasets: [{
    label: 'TOTAL',
    data: [wipFactory, wipGudang, wipStore],
    backgroundColor: [
      'rgb(54, 162, 235)',
      'rgb(255, 159, 64)',
      'rgb(201, 203, 207)'
    ],
  }]
}

const config1 = {
  type: 'bar',
  data: data1,
  options: {},
}

const barDashboardChart1 = new Chart(
  document.getElementById('barDashboardWIP1'),
  config1
  )
// dashboard TOTAL END

// declaring dashboard per article per WIP
// const article1 = document.getElementById('article1').textContent
// const article2 = document.getElementById('artilce2').textContent
// const article3 = document.getElementById('artilce3').textContent

// chart dashboard per article per WIP START
const article1 = {
  label: 'WIP Factory',
  data: [100,100,100,100,100,100,100,100],
  backgroundColor: 'rgb(54, 162, 235)'
}
 
const article2 = {
  label: 'WIP Gudang',
  data: [50,50,50,50,50,50,50,50,50],
  backgroundColor: 'rgb(255, 159, 64)'
}

const article3 = {
  label: 'WIP Store',
  data: [20,20,20,20,20,20,20,20],
  backgroundColor: 'rgb(201, 203, 207)'
}

const data2 = {
  labels: ['B22729R2S', 'S22772N1S', 'C22772N1S', 'B2162WP15', 'B22138M17', 'B20811C23', 'C22711D34', 'B22717J5S'],
  datasets: [article1,article2,article3]
}

const config2 = {
  type: 'bar',
  data: data2,
  options: {},
}
const barDashboardChart2 = new Chart(
  document.getElementById('barDashboardWIP2'),
  config2
  )
  // chart dashboard per article per WIP END