<?php
function icerikgetir()
{
	global $db;
	$icerik = $db->query("SELECT kategoriler.ad, gonderiler.tarih, gonderiler.icerik,
gonderiler.baslik,
kullanicilar.kuladi
FROM
gonderiler
INNER JOIN kategoriler ON kategoriler.id = gonderiler.kategori_id
INNER JOIN kullanicilar ON kullanicilar.id = gonderiler.kullanici_id
WHERE
gonderiler.goster = 1
")->fetchAll(PDO::FETCH_ASSOC);
	return $icerik;
}

function kategorigetir(){

	global $db;
	$kategori = $db->query("
	SELECT kategoriler.ad, COUNT(*) AS say
FROM gonderiler INNER JOIN kategoriler
ON gonderiler.kategori_id = kategoriler.id
GROUP BY kategoriler.id ORDER BY say DESC
")->fetchAll(PDO::FETCH_ASSOC);
	return $kategori;
}
?>