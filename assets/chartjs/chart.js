const barJanuari = document.getElementById('barJanuari').textContent
const barFebruari = document.getElementById('barFebruari').textContent
const barMaret = document.getElementById('barMaret').textContent
const barApril = document.getElementById('barApril').textContent
const barMei = document.getElementById('barMei').textContent
const barJuni = document.getElementById('barJuni').textContent
const barJuli = document.getElementById('barJuli').textContent
const barAgustus = document.getElementById('barAgustus').textContent
const barSeptember = document.getElementById('barSeptember').textContent
const barOktober = document.getElementById('barOktober').textContent
const barNovember = document.getElementById('barNovember').textContent
const barDesember = document.getElementById('barDesember').textContent



const arr = [barJanuari, barFebruari, barMaret, barApril, barMei, barJuni, barJuli, barAgustus, barSeptember, barOktober, barNovember, barDesember]

const data = {
  labels: [
    'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'Sebtember',
    'Oktober',
    'November',
    'Desember'
  ],
  datasets: [{
    label: 'Data Monitoring Surat Jalan',
    data: [arr[0], arr[1], arr[2], arr[3], arr[4], arr[5], arr[6], arr[7], arr[8], arr[9], arr[10], arr[11]],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 99, 132)',
      'rgb(255, 99, 132)',
      'rgb(255, 99, 132)',
      'rgb(255, 99, 132)',
      'rgb(255, 99, 132)',
      'rgb(255, 99, 132)',
      'rgb(255, 99, 132)',
      'rgb(255, 99, 132)',
      'rgb(255, 99, 132)',
      'rgb(255, 99, 132)',
      'rgb(255, 99, 132)'
    ],
  }]
}

const config = {
  type: 'bar',
  data: data,
  options: {},
}

Chart.defaults.font.size = 15;
const myChart = new Chart(
  document.getElementById('barChart'),
  config
)