<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * from tb_antrian WHERE id_sks = $id") or die("Query error : " . mysqli_error($data));
            while($d = mysqli_fetch_array($data)){
                // Tentukan alamat email tujuan dan subjek email
                $to = $d['email'];
                $subject = "SURAT SEHAT DARI RUMAH SAKIT-SAKITAN";

                // Tentukan file yang akan dikirim
                $file = "surat_sehat/Surat Sehat $id.pdf";
                $file_size = filesize($file);
                $handle = fopen($file, "r");
                $content = fread( $handle, $file_size);
                fclose($handle);
                $content = chunk_split(base64_encode($content));

                // Tentukan header untuk mengirim file
                $uid = md5(uniqid(time()));
                $header = "From: rumahsakit@gmail.com\r\n";
                $header .= "Reply-To: rumahsakit@gmail.com\r\n";
                $header .= "MIME-Version: 1.0\r\n";
                $header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
                $header .= "This is a multi-part message in MIME format.\r\n";
                $header .= "--".$uid."\r\n";
                $header .= "Content-type:text/plain; charset=iso-8859-1\r\n";
                $header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
                $header .= "Test email with attachment.\r\n\r\n";
                $header .= "--".$uid."\r\n";
                $header .= "Content-Type: application/octet-stream; name=\"".$file."\"\r\n"; // use different content types here
                $header .= "Content-Transfer-Encoding: base64\r\n";
                $header .= "Content-Disposition: attachment; filename=\"".$file."\"\r\n\r\n";
                $header .= $content."\r\n\r\n";
                $header .= "--".$uid."--";

                // Kirim email
                if (mail($to, $subject, "", $header)) {
                    echo "Email successfully sent with attachment.";
                } else {
                    echo "Error sending email.";
                }
            }
?>
