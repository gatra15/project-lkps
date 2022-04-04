<div>
  <canvas id="myChart"></canvas>
@foreach ($mahasiswa['data'] as $data)
  
@endforeach
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
let cData = JSON.parse(`<?php echo $data ?>`);
const labels = cData.label;
  
const data = {
  labels: labels,
  datasets: [{
    label: 'Daya Tampung',
    backgroundColor: 'rgb(255, 99, 132)',
    borderColor: 'rgb(255, 99, 132)',
    data: cData.daya_tampung,
  },
  {
    label: 'Jumlah Pendaftar',
    backgroundColor: 'rgb(51, 255, 51)',
    borderColor: 'rgb(51, 255, 51)',
    data: cData.pendaftar,
  },
  {
    label: 'Jumlah Lulus Seleksi',
    backgroundColor: 'rgb(102, 178, 255)',
    borderColor: 'rgb(102, 178, 255)',
    data: cData.lulus_seleksi,
  },
  {
    label: 'Jumlah Mahasiswa Reguler',
    backgroundColor: 'rgb(255, 51, 255)',
    borderColor: 'rgb(255, 51, 255)',
    data: cData.mahasiswa_reguler,
  },
  {
    label: 'Jumlah Mahasiswa Transfer',
    backgroundColor: 'rgb(255, 178, 102)',
    borderColor: 'rgb(255, 178, 102)',
    data: cData.mahasiswa_transfer,
  },
  {
    label: 'Jumlah Mahasiswa Aktif Reguler',
    backgroundColor: 'rgb(178, 102, 255)',
    borderColor: 'rgb(178, 102, 255)',
    data: cData.mahasiswa_aktif_reguler,
  },
  {
    label: 'Jumlah Mahasiswa Aktif Transfer',
    backgroundColor: 'rgb(102, 255, 255)',
    borderColor: 'rgb(102, 255, 255)',
    data: cData.mahasiswa_aktif_transfer,
  },
]
};
  
const config = {
  type: 'line',
  data: data,
  options: {
    scales: {
        y: {
            max: 1600,
            min: 0,
            ticks: {
                stepSize: 50
            }
        }
    }
  }
};
</script>

<script>
const myChart = new Chart(
  document.getElementById('myChart'),
  config
);
</script>
