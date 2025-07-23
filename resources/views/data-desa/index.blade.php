@extends('layouts.main')

@section('content')
<section class="counts section-bg">
    <div class="container">

      <div class="row my-4">
        <div class="section-title">
            <h2>Data Agama</h2>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">Agama</th>
                                    <th scope="col">Penganut</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataAgamas as $agama)
                                <tr>
                                    <td>{{ $agama->agama }}</td>
                                    <td>{{ $agama->penganut }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot class="table-warning">
                                <tr>
                                    <td>Total </td>
                                    <td>{{ $totalPenganut }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>                    
                </div>
            </div>
        </div>
    
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div>
                        <canvas id="agamaChart"></canvas>
                    </div>                          
                </div>
            </div>
        </div>
      </div>
    
      <hr>

      <div class="row my-4">
        <div class="section-title">
            <h2>Data Jenis Kelamin</h2>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataJenisKelamins as $dataJenisKelamin)
                                <tr>
                                    <td>{{ $dataJenisKelamin->jenis_kelamin }}</td>
                                    <td>{{ $dataJenisKelamin->jumlah }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot class="table-warning">
                                <tr>
                                    <td>Total </td>
                                    <td>{{ $jumlahTotal }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>                    
                </div>
            </div>
        </div>
    
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div>
                        <canvas id="jenisKelaminChart" style="max-height: 400px; overflow: auto;"></canvas>
                    </div>                          
                </div>
            </div>
        </div>
      </div>

      <hr>

      <div class="row my-4">
        <div class="section-title">
            <h2>Data Pekerjaan</h2>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">Pekerjaan</th>
                                    <th scope="col">jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pekerjaans as $pekerjaan)
                                <tr>
                                    <td>{{ $pekerjaan->pekerjaan }}</td>
                                    <td>{{ $pekerjaan->jumlah }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot class="table-warning">
                                <tr>
                                    <td>Total </td>
                                    <td>{{ $totalPekerjaan }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>                    
                </div>
            </div>
        </div>
    
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div>
                        <canvas id="pekerjaanChart" style="max-height: 400px; overflow: auto;"></canvas>
                    </div>                          
                </div>
            </div>
        </div>
      </div>
    
      
    </div>
  </section>
  

  <script>
    // Chart Agama (tetap bar chart vertikal)
    const ctxAgama = document.getElementById('agamaChart');
    const labels = {!! $labels !!};
    const dataPenganut = {!! $dataPenganut !!};

    new Chart(ctxAgama, {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [{
          label: 'Penganut Agama',
          data: dataPenganut,
          backgroundColor: [
            'rgba(54, 162, 235, 0.7)',
            'rgba(255, 205, 86, 0.7)',
            'rgba(255, 99, 132, 0.7)',
            'rgba(75, 192, 192, 0.7)',
            'rgba(153, 102, 255, 0.7)',
            'rgba(255, 159, 64, 0.7)',
            'rgba(201, 203, 207, 0.7)'
          ],
          borderColor: [
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)',
            'rgb(255, 99, 132)',
            'rgb(75, 192, 192)',
            'rgb(153, 102, 255)',
            'rgb(255, 159, 64)',
            'rgb(201, 203, 207)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { display: false },
          title: { display: false }
        },
        scales: {
          y: { beginAtZero: true }
        }
      }
    });

    // Chart Jenis Kelamin (pie chart)
    const ctxJenisKelamin = document.getElementById('jenisKelaminChart');
    const labelsJenisKelamin = {!! $labelsJenisKelamin !!};
    const jumlah = {!! $jumlah !!};

    new Chart(ctxJenisKelamin, {
        type: 'pie', 
        data: {
            labels: labelsJenisKelamin,
            datasets: [{
                label: 'Jumlah Jenis Kelamin',
                data: jumlah,
                backgroundColor: [
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 99, 132, 0.7)'
                ],
                borderColor: [
                    'rgb(54, 162, 235)',
                    'rgb(255, 99, 132)'
                ],
                borderWidth: 1,
                hoverOffset: 8
            }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'bottom',
              labels: {
                font: { size: 14 }
              }
            }
          }
        }
    });

    // Chart Pekerjaan (horizontal bar chart)
    const ctxPekerjaan = document.getElementById('pekerjaanChart');
    const labelPekerjaan  = {!! $labelPekerjaan !!};
    const dataPekerjaan   = {!! $jumlahPekerjaan !!};

    new Chart(ctxPekerjaan, {
        type: 'bar',
        data: {
            labels: labelPekerjaan,
            datasets: [{
                label: 'Jumlah Pekerjaan',
                data: dataPekerjaan,
                backgroundColor: 'rgba(75, 192, 192, 0.7)',
                borderColor: 'rgb(75, 192, 192)',
                borderWidth: 1
            }]
        },
        options: {
            indexAxis: 'y', // horizontal bar
            responsive: true,
            plugins: {
                legend: { display: false },
                title: { display: false },
                tooltip: {
                  callbacks: {
                    label: function(context) {
                      return `${context.label}: ${context.parsed.x} orang`;
                    }
                  }
                }
            },
            scales: {
                x: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Jumlah Orang'
                    }
                },
                y: {
                    ticks: {
                        font: { size: 13 }
                    }
                }
            }
        }
    });
</script>

  
@endsection