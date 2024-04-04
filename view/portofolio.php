<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/public/css/style.css">
  <title>PortHub | Portofolio</title>
</head>

<body>
  <div class="container">
    <div class="bg"></div>
    <div class="content flex-row">
      <div class="sidebar flex-column">
        <div class="title-nav">
          <h2>PortHub.</h2>
        </div>
        <div class="nav">
          <ul>
            <li>
              <a href="/view/dasboard.php" class="nav-link">
                <i class="icon-nav">
                  <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.04999 17.55H14.85V4.04997H4.04999V17.55ZM4.04999 28.35H14.85V20.25H4.04999V28.35ZM17.55 28.35H28.35V14.85H17.55V28.35ZM17.55 4.04997V12.15H28.35V4.04997H17.55Z"fill="#8E8E93" />
                  </svg>
                </i>
                Dashboard
              </a>
            </li>
            <li>
              <a href="/view/pengguna.php" class="nav-link">
                <i class="icon-nav">
                  <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.6 14.85C23.841 14.85 25.6365 13.041 25.6365 10.8C25.6365 8.55903 23.841 6.75003 21.6 6.75003C19.359 6.75003 17.55 8.55903 17.55 10.8C17.55 13.041 19.359 14.85 21.6 14.85ZM10.8 14.85C13.041 14.85 14.8365 13.041 14.8365 10.8C14.8365 8.55903 13.041 6.75003 10.8 6.75003C8.55899 6.75003 6.74999 8.55903 6.74999 10.8C6.74999 13.041 8.55899 14.85 10.8 14.85ZM10.8 17.55C7.65449 17.55 1.34999 19.1295 1.34999 22.275V25.65H20.25V22.275C20.25 19.1295 13.9455 17.55 10.8 17.55ZM21.6 17.55C21.2085 17.55 20.763 17.577 20.2905 17.6175C21.8565 18.7515 22.95 20.277 22.95 22.275V25.65H31.05V22.275C31.05 19.1295 24.7455 17.55 21.6 17.55Z" fill="#8E8E93" />
                  </svg>
                </i>
                Data Pengguna
              </a>
            </li>
            <li class="active">
              <a href="/view/portofolio.php" class="nav-link">
                <i class="icon-nav">
                  <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.65 4.05002H20.007C19.44 2.48402 17.955 1.35002 16.2 1.35002C14.445 1.35002 12.96 2.48402 12.393 4.05002H6.75002C5.26502 4.05002 4.05002 5.26502 4.05002 6.75002V25.65C4.05002 27.135 5.26502 28.35 6.75002 28.35H25.65C27.135 28.35 28.35 27.135 28.35 25.65V6.75002C28.35 5.26502 27.135 4.05002 25.65 4.05002ZM16.2 4.05002C16.9425 4.05002 17.55 4.65752 17.55 5.40002C17.55 6.14252 16.9425 6.75002 16.2 6.75002C15.4575 6.75002 14.85 6.14252 14.85 5.40002C14.85 4.65752 15.4575 4.05002 16.2 4.05002ZM18.9 22.95H9.45002V20.25H18.9V22.95ZM22.95 17.55H9.45002V14.85H22.95V17.55ZM22.95 12.15H9.45002V9.45002H22.95V12.15Z" fill="#8E8E93" />
                  </svg>
                </i>
                Data Portofolio
              </a>
            </li>
          </ul>
        </div>
        <div class="footer-nav">
          <p>Neobitose Copyright © 2024</p>
        </div>
      </div>
      <div class="main-board">
        <div class="head-board">
          <div class="left"><input type="search" name="search" id="search" class="search" placeholder="Search..."></div>
          <div class="right">
            <a href="/view/login.php">
              <button>Logout</button>
            </a>
          </div>
        </div>
        <div class="board">
          <div class="flex-column">
            <!-- <div class="flex-row">
              <div class="top-card">
                <div class="desc-card">
                  <div class="flex">
                    <img src="/public/img/icon/icon_buttons_blue.png" alt="">
                    <div class="desc-img">
                      <p class="count">10</p>
                      <p class="desc-count">Portofolio Terbaik</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="top-card">
                <div class="desc-card">
                  <div class="flex">
                    <img src="/public/img/icon/icon_buttons_green.png" alt="">
                    <div class="desc-img">
                      <p class="count">230</p>
                      <p class="desc-count">Pengguna Aplikasi</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="top-card">
                <div class="desc-card">
                  <div class="flex">
                    <img src="/public/img/icon/icon_buttons_pink.png" alt="">
                    <div class="desc-img">
                      <p class="count">1,530</p>
                      <p class="desc-count">Portofolio</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="card-table">
              <div class="title-table">
                <h3>Table Portofolio</h3>
                <hr>
              </div>
              <div class="main-table">
                <button class="create-btn">Tambah Data</button>
                <table class="table" cellspacing="0">
                  <tr>
                    <th>No</th>
                    <th>Judul Portofolio</th>
                    <th>Link</th>
                    <th>Tanggal Upload</th>
                    <th>Nama Pengguna</th>
                    <th>Aksi</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Website Admin</td>
                    <td><a href="hmifunej.id">https://website.com</a></td>
                    <td>4 Mar 2024</td>
                    <td>Neobitose Ramadhan</td>
                    <td>
                      <div class="grup-action-btn">
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Hapus</button></div>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Poster Lingkungan</td>
                    <td><a href="hajarif.hmihunej.id">https://drive.google.com</a></td>
                    <td>12 Jan 2024</td>
                    <td>Ahmad Alif Ramadhan</td>
                    <td>
                      <div class="grup-action-btn">
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Hapus</button>
                        <!-- <a href="action-btn"><img src="/public/img/icon/edit.svg" alt=""></a>
                        <a href="action-btn"><img src="/public/img/icon/trash.svg" alt=""></a> -->
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Karya Tulis Ilmiah</td>
                    <td><a href="ifmerch.hmifunej.id">https://drive.google.com</a></td>
                    <td>30 Feb 2024</td>
                    <td>Nopal Bigzy</td>
                    <td>
                      <div class="grup-action-btn">
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Hapus</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Aplikasi Siakad</td>
                    <td><a href="s.hmifunej.id">https://siakad.com</a></td>
                    <td>1 Apr 2024</td>
                    <td>Thanos</td>
                    <td>
                      <div class="grup-action-btn">
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Hapus</button>
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>