<!DOCTYPE html>
<head>

<meta charset="UTF-8">
<title class="arab">بداية الثلث الأخير من الليل</title>
<link rel="stylesheet" href="styles.css">

</head>



<body class="demo-wrap">

  <div class="demo-content">
  


<section class="Title">
<h1 class="Title-first">Calculation of the begining of the last third of a night</h1>
<h1 class="Title-mid"> - </h1>
<h1 class="Title-last" class="arab"> حساب وقت بداية الثلث الأخير من ليلة</h1>
</section>



<?php 

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

if (!isset($_POST['f']) && !isset($_POST['i']) ) {
    ?>
<section class="ask-input">
<h1 class="input-first">Enter the times of the prays</h1>
<h1  class="arab" class="input-last"> أدخل وقت صلاتي الفجر و المغرب</h1>
</section>

<?php 
}
?>

<form action="" method="POST" >
    <p class="form-group1">
        <label for="f">Fadjr  </label>   
        <input type="time" id="f" class="form-control" name="f" value="" required>  
        <label for="f">الفجر </label> 
    </p>

    <p class="form-group2">
        <label for="i">Maghrib   </label>
        <input type="time" id="i" class="form-control" name="i" value="" required>  
        <label for="i">  المغرب </label> 
    </p>

    <button class="btn btn-primary">Enter</button>

</form>




<?php if (isset($_POST['f']) && isset($_POST['i']) ) { 



$f=explode(':',$_POST['f']);
$i=explode(':',$_POST['i']);

$hf=intval($f[0]);
$mf=intval($f[1]);

$hi=intval($i[0]);
$mi=intval($i[1]);


switch ($hf >= $hi) {

    case true : {
        $hd = $hf - $hi;
        break;
                    }
                    
    case false : {
        $hd = $hf - $hi + 24;
        break;
                   }
}

switch ($mf >= $mi) {

    case true : {
        $md = $mf - $mi;
        break;
                    }
                    
    case false : {
        $hd--;
        $md = $mf - $mi + 60;
        break;
                   }
}


$dminutes = ($hd * 60 + $md)/3;


$hd3 = floor($dminutes / 60);
$md3 = ($dminutes % 60);

// الثلث الأخير

$ht=$hf-$hd3;

$mt=$mf-$md3;



if ($ht < 0) $ht = 24 + $ht;

if ($mt < 0) { 
   if ($ht == 0)  {$ht = 23; }
   else {$ht--; }
   $mt = 60 + $mt;
  }
  
// الثلث الأول
  $h1=$ht-$hd3;

$m1=$mt-$md3;



if ($h1 < 0) $h1 = 24 + $h1;

if ($m1 < 0) { 
   if ($h1 == 0)  {$h1 = 23; }
   else {$h1--; }
   $m1 = 60 + $m1;
  }

// المنتصف

$dminutes = ($hd * 60 + $md)/2;


$hd2 = floor($dminutes / 60);
$md2 = ($dminutes % 60);

$hn=$hf-$hd2;

$mn=$mf-$md2;


if ($hn < 0) $hn = 24 + $hn;

if ($mn < 0) { 
   if ($hn == 0)  {$hn = 23; }
   else {$hn--; }
   $mn = 60 + $mn;
  }

}

if (isset($ht) && isset($mt)) {
?>

<table class="fadjr_maghrib">
  <tr>
    <td>Fadjr  </td>
    <td> <?= sprintf("%02d", $hf).':'. sprintf("%02d", $mf)  ?> </td>
    <td> الفجر</th>
  </tr>
  <tr>
    <td>Maghrib</td>
    <td> <?= sprintf("%02d", $hi).':'. sprintf("%02d", $mi) ?> </td>
    <td> المغرب </td>
  </tr>
  <tr>
    <td>Second third</td>
    <td> <?= sprintf("%02d", $h1).':'. sprintf("%02d", $m1) ?> </td>
    <td> الثلث الثاني </td>
  </tr>
  <tr>
    <td>Half night </td>
    <td> <?= sprintf("%02d", $hn).':'. sprintf("%02d", $mn) ?> </td>
    <td>   نصف الليل</td>
  </tr>

</table>



<section class="result">
    
    <p> Last third of this night begins at : </p>
    <p class="final_result">   <?= sprintf("%02d", $ht).':'. sprintf("%02d", $mt)  ?>  </p>
    <p class="arab">  الثلث الأخير من الليل يبدأ على :</p>


</section>

<?php } ?>

<section class="quran">
    <p class="arab">{ وَإِذَا سَأَلَكَ عِبَادِی عَنِّی فَإِنِّی قَرِیبٌ أُجِیبُ دَعۡوَةَ ٱلدَّاعِ إِذَا دَعَانِ فَلۡیَسۡتَجِیبُوا۟ لِی وَلۡیُؤۡمِنُوا۟ بِی لَعَلَّهُمۡ یَرۡشُدُونَ }
        
[سورة البقرة 186]
    </p>

    <p class="arab">{  إِنَّ ٱلۡمُتَّقِينَ فِي جَنَّٰتٖ وَعُيُونٍ ﴿15﴾ ءَاخِذِينَ مَآ ءَاتَىٰهُمۡ رَبُّهُمۡۚ إِنَّهُمۡ كَانُواْ قَبۡلَ ذَٰلِكَ مُحۡسِنِينَ ﴿16﴾ كَانُواْ قَلِيلٗا مِّنَ ٱلَّيۡلِ مَا يَهۡجَعُونَ ﴿17﴾ وَبِٱلۡأَسۡحَارِ هُمۡ يَسۡتَغۡفِرُونَ ﴿18﴾ }
    [سورة الذاريات ]
    </p>
</section>

</div>

</body>