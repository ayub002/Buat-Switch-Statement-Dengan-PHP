<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemograman PHP</title>
    <link rel="stylesheet" href="https://temorubun.site/ayub/php/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid">
      <a class="navbar-brand" href="https://temorubun.site/ayub/php/">Pemograman <span class="badge bg-primary">PHP</span></a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content">
        <div class="hamburger-toggle">
          <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </button>
      <div class="collapse navbar-collapse" id="navbar-content">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0 ">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">TEORI PEMROGRAMAN</a>
            <ul class="dropdown-menu shadow">
              <li class="dropend">
                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Pertemuan 1</a>
                <ul class="dropdown-menu shadow">
                  <li><a class="dropdown-item" href="https://temorubun.site/ayub/php/teori/materi1/"> Materi PHP 1</a></li>
                  <li><a class="dropdown-item" href="https://temorubun.site/ayub/php/teori/tugas1/"> Tugas PHP 1</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">PRAKTEK PEMOGRAMAN</a>
            <ul class="dropdown-menu shadow">
              <li class="dropend">
                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Pertemuan 1</a>
                <ul class="dropdown-menu shadow">
                  <li><a class="dropdown-item" href="https://temorubun.site/ayub/php/praktek/materi1/"> Materi PHP 1</a></li>
                  <li><a class="dropdown-item" href="https://temorubun.site/ayub/php/praktek/tugas1/"> Tugas PHP 1</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="my-5">
    <div class="container">
        <div class="p-4 border">
            <label><h3>Daftar Belanja</h3></label><br><br>
                        
            <form method="post">
    
                <table>
    
                    <tr>
    
                        <td colspan='4'><h4>Buah Buahan</h4></td>
    
                    </tr>
    
                    <tr>
    
                        <td class="p-3">
    
                            <label for="Apel">
    
                                <input type="checkbox" name="barang[]" value="Apel" id="Apel"> Apel - Rp 30.000 per kg<br>
    
                            </label>
    
                        </td>
    
                        <td class="p-3">
    
                            <label for="Pisang">
    
                                <input type="checkbox" name="barang[]" value="Pisang" id="Pisang"> Pisang - Rp 15.000 per kg<br>
    
                            </label>
    
                        </td>
    
                        <td class="p-3">
    
                            <label for="Mangga">
    
                                <input type="checkbox" name="barang[]" value="Mangga" id="Mangga"> Mangga - Rp 30.000 per kg<br>
    
                            </label>
    
                        </td>
    
                        <td class="p-3">
    
                            <label for="Jeruk">
    
                                <input type="checkbox" name="barang[]" value="Jeruk" id="Jeruk"> Jeruk - Rp 20.000 per kg<br>
    
                            </label>
    
                        </td>
    
                    </tr>
    
                    <tr>
    
                        <td class="p-3">
    
                            <label for="Nanas">
    
                                <input type="checkbox" name="barang[]" value="Nanas" id="Nanas"> Nanas - Rp 15.000 per kg<br>
    
                            </label>
    
                        </td>
    
                        <td class="p-3">
    
                            <label for="Pepaya">
    
                                <input type="checkbox" name="barang[]" value="Pepaya" id="Pepaya"> Pepaya - Rp 10.000 per kg<br>
    
                            </label>
    
                        </td>
    
                        <td class="p-3">
    
                            <label for="Anggur">
    
                                <input type="checkbox" name="barang[]" value="Anggur" id="Anggur"> Anggur - Rp 20.000 per kg<br>
    
                            </label>
    
                        </td>
    
                        <td class="p-3">
    
                            <label for="Melon">
    
                                <input type="checkbox" name="barang[]" value="Melon" id="Melon"> Melon - Rp 10.000 per kg<br>
    
                            </label>
    
                        </td>
    
                    </tr>
    
                    <tr>
    
                        <td class="p-3">
    
                            <label for="Kiwi">
    
                                <input type="checkbox" name="barang[]" value="Kiwi" id="Kiwi"> Kiwi - Rp 15.000 per kg<br>
    
                            </label>
    
                        </td>
    
                        <td class="p-3">
    
                            <label for="Alpukat">
    
                                <input type="checkbox" name="barang[]" value="Alpukat" id="Alpukat"> Alpukat - Rp 10.000 per kg<br>
    
                            </label>
    
                        </td>
    
                        <td class="p-3">
    
                            <label for="Jambu biji">
    
                                <input type="checkbox" name="barang[]" value="Jambu biji" id="Jambu biji"> Jambu biji - Rp 15.000 per kg<br>
    
                            </label>
    
                        </td>
    
                        <td class="p-3">
    
                            <label for="Durian">
    
                                <input type="checkbox" name="barang[]" value="Durian" id="Durian"> Durian - Rp 30.000 per kg<br>
    
                            </label>
    
                        </td>
    
                    </tr>
    
                    <tr>
    
                        <td class="p-3">
    
                            <label for="Rambutan">
    
                                <input type="checkbox" name="barang[]" value="Rambutan" id="Rambutan"> Rambutan - Rp 20.000 per kg<br>
    
                            </label>
    
                        </td>
    
                        <td class="p-3">
    
                            <label for="Salak">
    
                                <input type="checkbox" name="barang[]" value="Salak" id="Salak"> Salak - Rp 20.000 per kg<br>
    
                            </label>
    
                        </td>
    
                        <td class="p-3">
    
                            <label for="Belimbing">
    
                                <input type="checkbox" name="barang[]" value="Belimbing" id="Belimbing"> Belimbing - Rp 15.000  per kg<br>
    
                            </label>
    
                        </td>
                        
                        <td class="p-3">
    
                            <label for="Markisa">
    
                                <input type="checkbox" name="barang[]" value="Markisa" id="Markisa"> Markisa - Rp 15.000 per kg<br>
    
                            </label>
    
                        </td>
    
                    </tr>
    
                    <tr>
    
                        <td class="p-3">
    
                            <label for="Buah naga">
    
                                <input type="checkbox" name="barang[]" value="Buah naga" id="Buah naga"> Buah naga - Rp 20.000 per kg<br>
    
                            </label>
    
                        </td>
    
                        <td class="p-3">
    
                            <label for="Leci">
    
                                <input type="checkbox" name="barang[]" value="Leci" id="Leci"> Leci - Rp 20.000 per kg<br>
    
                            </label>
    
                        </td>
    
                        <td class="p-3">
    
                            <label for="Delima">
    
                                <input type="checkbox" name="barang[]" value="Delima" id="Delima"> Delima - Rp 20.000 per kg<br>
    
                            </label>
    
                        </td>
                        
     
                    </tr>
    
                    <tr>
    
                        <td class="p-3"><input type="submit" name="submit" class="btn btn-light p-3" value="Hitung Total"></td>
    
                    </tr>
                    
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr>
                        <td></td>
                        <td colspan="3">
    
                            <?php
    
                                if(isset($_POST['submit'])) {
    
                                    $barang = $_POST['barang'];
    
                                    $total = 0;
    
                                    if(empty($barang)) {
    
                                        echo "<h4>Anda Belum Memilih Barang.</h4>";
                                        header("refresh:3;url=https://temorubun.site/ayub/php/teori/tugas1/");
    
                                    } else {
    
                                        // echo "<h2>Daftar Belanja yang Dipilih:</h2>";
    
                                        echo "<table class='table table-striped' style='text-align: center;'>";
    
                                        echo "<tr><th style='padding: 25px;'>Barang</th><th style='padding: 25px;'>Harga Satuan</th><th style='padding: 25px;'>Jumlah</th><th style='padding: 25px;'>Total</th></tr>";
    
                                        foreach($barang as $b) {
    
                                            echo "<tr>";
    
                                            echo "<td style='padding: 25px;'>" . $b . "</td>";
    
                                            switch($b) {
    
                                                case "Apel":
                                                
                                                    $harga = 30000;
                                                
                                                break;
                                                
                                                case "Pisang":
                                                
                                                    $harga = 15000;
                                                
                                                break;
                                                
                                                case "Mangga":
                                                
                                                    $harga = 30000;
                                                
                                                break;
                                                
                                                case "Jeruk":
                                                
                                                    $harga = 20000;
                                                break;
                                                
                                                case "Nanas":
                                                
                                                    $harga = 15000;
                                                
                                                break;
                                                
                                                case "Pepaya":
                                                
                                                    $harga = 10000;
                                                
                                                break;
                                                
                                                case "Anggur":
                                                
                                                    $harga = 20000;
                                                
                                                break;
                                                
                                                case "Melon":
                                                
                                                    $harga = 10000;
    
                                                break;
                                                
                                                case "Kiwi":
                                                
                                                    $harga = 15000;
                                                
                                                break;
                                                
                                                case "Alpukat":
                                                
                                                    $harga = 10000;
                                                
                                                break;
                                                
                                                case "Jambu biji":
                                                
                                                    $harga = 15000;
                                                
                                                break;
                                                
                                                case "Rawon":
                                                
                                                    $harga = 35000;
    
                                                break;
    
                                                case "Durian":
    
                                                    $harga = 30000;
                                                
                                                break;
                                                
                                                case "Rambutan":
                                                
                                                    $harga = 20000;
                                                
                                                break;
                                                
                                                case "Salak":
                                                
                                                    $harga = 20000;
                                                
                                                break;
                                                
                                                case "Belimbing":
                                                
                                                    $harga = 15000;
    
                                                break;
    
                                                case "Markisa":
    
                                                    $harga = 15000;
                                                
                                                break;
                                                
                                                case "Buah naga":
                                                
                                                    $harga = 20000;
                                                
                                                break;
                                                
                                                case "Leci":
                                                
                                                    $harga = 20000;
                                                
                                                break;
                                                
                                                case "Delima":
                                                
                                                    $harga = 20000;
    
                                                break;
                                                
                                                default:
                                                
                                                    $harga = 0;
                                                    
                                                break;
                                            }
                                            
                                            echo "<td style='padding: 25px;'>" . number_format($harga, 0, ",", ".") . "</td>";
    
                                            echo "<td style='padding: 25px;'>1</td>";
    
                                            $total += $harga;
    
                                            echo "<td style='padding: 25px;'>" . number_format($harga, 0, ",", ".") . "</td>";
    
                                            echo "</tr>";
    
                                        }
    
                                        echo "<tr><td style='text-align: left; padding: 25px;' colspan='3'>Total Belanja:</td><td>" . number_format($total, 0, ",", ".") . "</td></tr>";
    
                                        echo "</table>";
                                        
                                        echo "<form method='post'>";
                                        
                                        echo "<input type='submit' name='Bayar' value='Bayar' class='btn btn-light p-3 m-5'>";
                                        
                                        echo "<input type='submit' name='Batal' value='Batal' class='btn btn-light p-3 m-5'>";
                                        
                                        echo "</form>";
    
                                    }
    
                                } 
                                
                                if(isset($_POST['Bayar'])){
                                 
                                    echo "<h4>Terima Kasih Telah Memesan</h4>";
                                    header("refresh:3;url=https://temorubun.site/ayub/php/teori/tugas1/");                                 
                                }
                                
                                if(isset($_POST['Batal'])){
                                 
                                    header($_SERVER['REQUEST_URI']);
                                 
                                }
    
                            ?>

                        </td>
                        
                    </tr>
    
                </table>                 
    
            </form>
    
            <br>
        
        </div>
    </div><br><br>
    
    <div class="container">

        <div class="p-4 border">
        <section>
           <form>
               <table>
                    <tr>
                        <td>
                            <label for="ganjilgenap"><h4>Bilangan Bulat Genap Atau Ganjil!</h4></label>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-3">
                            <input type="number" name="genapganjil" placeholder="Masukan Nilai " class="form-control id="ganjilgenap">
                        </td>
                        <td>
                            <button type="submit" name="Genap-Ganjil" class="btn btn-light">Priksa</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-4" colspan="5">
                            <?php
                                if (isset($_GET["Genap-Ganjil"])){
                                    $bilangan = $_GET["genapganjil"];
                                    $output = ($bilangan % 2 == 0) ? "$bilangan Adalah Bilangan Genap" : "$bilangan Adalah Bilangan Ganjil";
                                    echo $output;
                                }
                            ?>
                        </td>
                    </tr>
                </table>
            </form>
        </section>
        </div>
            
        <hr>
        <p>Link Github: <a href="https://github.com/ayub002" target="_blank">https://github.com/Ayub-Maniagasi</a></p>

    </div>
  </section>

  <footer class="bg-dark p-4 text-white text-center">
    <small>CopyRaight © Ayub Maniagasi 2023</small>
  </footer>
<script src="https://temorubun.site/ayub/php/js/bootstrap.bundle.js"></script>
</body>
</html>