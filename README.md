# tcc-docker-compose

## Tentang program
  Aplikasi ini menghubungkan 2 buah kontainer yaitu untuk apache dan database mysql. images apache php dan mysql telah di push/upload ke docker hub. database yang digunakan untuk menjalankan aplikasi ini telah di include ke dalam images database mysql. aplikasi ini merupakan aplikasi sederhana berbasis php oop untuk CRUD data buku.
  
### Nama Kelompok :
1. Dedi Irawan (145610053) 
2. Ahmad Fauzi (145610054)
3. Anis Susilo (145610157)
4. Munifatul Arifah (145610162)

### Link kontainer/images yang digunakan
- <a href="https://hub.docker.com/r/munifatul03/apache-tccphp/">Apache-php</a>
- <a href="https://hub.docker.com/r/munifatul03/mysql-tccdb/">DB Mysql </a>

### Cara Menjalankan
1. Pastikan telah mengistall docker, docker compose, dan git
2. Lakukan download dari repository ini atau lakukan perintah melalui terminal 
```
 git clone https://github.com/irawand07/tcc-docker-compose 
```
3. Jalankan perintah pada terminal 
```
sudo docker-compose up -d
```
4. Jika sudah selesai buka browser ketikkan  di url 
```
http://localhost/
```
5. Selesai
