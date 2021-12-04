<style type="text/css">
	body{
		background: whitesmoke;
	}
	h3{
		font-family: monospace; 
		background: seagreen; 
		padding: 5px; 
		color: white;
		width: 260px;
	}
	.object{
		margin-top: 150px;
	}
	h4{
		color: darkred;
	}
</style>
<body>
<h3>Dalam Bentuk Array</h3>
<?
$handphone=[
	'perusahaan'=>'Xiaomi',
	'brand'=>[
		'poco'=>[
			'x3'=>[
				'nfc'=>'poco x3 NFC',
				'pro'=>'poco x3 Pro'
			],
			'f1'=>[
				'biasa'=>'poco F1',
				'pro'=>'poco F1 Pro'
			]
		],
		'realme'=>[
			'A8'=>[
				'pro'=>'realme 8A Pro',
				't5G'=>'realme 8A t5G'
			],
			'narzo'=>[
				'A20'=>'realme narzo A20',
				'A30'=>'realme narzo A30'
			]
		]
	],
	'warna'=>[
		'gelap'=>'hitam',
		'fariasi'=>'biru muda',
		'terang'=>'putih'
	],
	'penyimpanan'=>[
		'kecil'=>'64 GB',
		'normal'=>'128 GB',
		'besar'=>'256 GB'
	]
];

echo "<pre>";
print_r($handphone);
echo "<pre>";

echo "<h4>Pemanggilan index sesuai yang dibutuhkan (Bentuk Array)</h4>";

echo "<h5>barang 1</h5>";
echo "perusahaan = {$handphone['perusahaan']} <br>";
echo "brand = {$handphone['brand']['poco']['f1']['pro']} <br>";
echo "warna = {$handphone['warna']['terang']} <br>";
echo "penyimpanan = {$handphone['penyimpanan']['normal']}";

echo "<h5>barang 2</h5>";
echo "perusahaan = {$handphone['perusahaan']} <br>";
echo "brand = {$handphone['brand']['realme']['narzo']['A30']} <br>";
echo "warna = {$handphone['warna']['gelap']} <br>";
echo "penyimpanan = {$handphone['penyimpanan']['besar']}";

?>
<h3 class="object">Diubah Kedalam Bentuk Object</h3>
<?

// mengubah dari array ke object
$handphone=(object)$handphone;
$handphone->brand=(object)$handphone->brand;
$handphone->brand->poco=(object)$handphone->brand->poco;
$handphone->brand->poco->x3=(object)$handphone->brand->poco->x3;
$handphone->brand->poco->f1=(object)$handphone->brand->poco->f1;
$handphone->brand->realme=(object)$handphone->brand->realme;
$handphone->brand->realme->A8=(object)$handphone->brand->realme->A8;
$handphone->brand->realme->narzo=(object)$handphone->brand->realme->narzo;
$handphone->warna=(object)$handphone->warna;
$handphone->penyimpanan=(object)$handphone->penyimpanan;

echo "<pre>";
print_r($handphone);
echo "<pre>";

echo "<h4>Pemanggilan index sesuai yang dibutuhkan (Bentuk Object)</h4>";

echo "<h5>barang 1</h5>";
echo "perusahaan = {$handphone->perusahaan} <br>";
echo "brand = {$handphone->brand->realme->A8->t5G} <br>";
echo "warna = {$handphone->warna->terang} <br>";
echo "penyimpanan = {$handphone->penyimpanan->normal}";

echo "<h5>barang 2</h5>";
echo "perusahaan = {$handphone->perusahaan} <br>";
echo "brand = {$handphone->brand->poco->x3->pro} <br>";
echo "warna = {$handphone->warna->fariasi} <br>";
echo "penyimpanan = {$handphone->penyimpanan->besar}";
?>
</body>