<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <style>
      *{
        font-family: Poppins;
        font-weight: bold;
      }
        .text-item {
            display: flex;
            flex-direction: column;
            background-color: #003C43;
            width: 280px;
            height: 100%; 
            padding: 20px;
            box-sizing: border-box; 
        }
        .nav-pills {
            display: flex;
            flex-direction: column;
            justify-content: center; 
            align-items: center; 
            margin-top: 200px; 
            padding: 20px;
        }

        .nav-link {
            color: #E3FEF7; 
            background-color: transparent;
            border-radius: 4px; 
            padding: 12px 20px; 
            text-align: center;
            margin: 10px 0; 
            display: block; 
        }

        .nav-link.active, 
        .nav-link:focus, 
        .nav-link:hover {
            background-color: #E3FEF7; 
            color: #003C43; 
            border: none; 
        }

        .nav-link {
            text-decoration: none; 
        }

        .fs-4 {
            color: #E3FEF7;
        }
    </style>
    @yield('css')
</head>
<body> 
    <div id="main" class="d-flex">
        <div id="sidebar">
          <main class="d-flex flex-nowrap">
            <div style="width: 290px; height: 100vh; background-color: #77B0AA;">
              <div class="text-item">
                <a class="d-flex align-items-center">
                    <a class="fs-4">LIBRARY ID</a>
                </a>
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                      <a href="/dashboard" class="nav-link">
                          DASHBOARD
                      </a>
                  </li>
                <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="masterDataDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            MASTER DATA
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="masterDataDropdown">
                        <li><a href="/DataMember" class="dropdown-item">DATA SISWA</a></li>
                        <li><a href="/DataBuku" class="dropdown-item">DATA BUKU</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/transaksi" class="nav-link">
                        TRANSAKSI
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/laporan" class="nav-link">
                        LAPORAN
                    </a>
                </li>
              </ul>
            </div>
            </div>
        </div>
        <div id="isi-konten" style="width: 100%; max-width: calc(100% - 280px);" class="container-fluid ml-3">
            @yield('isi')
        </div>
    </div>
  </div>
  <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
