<?php
include("block/top.php");
?>

<body>
 <div class="container">
	<div class="alert alert-primary mb-2 mt-3" role="alert">
		Hudud: <strong>Sirdaryo viloyati Mirzaobod tumani</strong> 
		 
  		 
  		 <a href="index.php?token=exit" class="btn btn-danger">dasturdan chiqish</a> 
		</div>
	</div>
 <div class="container">
	<div class="row">
  <div class="col-4">
	   
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		<?php
		$mak = mysql_query("select * from `school`");
		while ($mmak = mysql_fetch_array($mak))
		{
			?>
		<a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#g1" role="tab" aria-controls="v-pills-home" aria-selected="true"><?php echo $mmak['name'];?><div class="progress">
  			<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 50%"><b>50%</b></div>
</div></a>
		
		<?php
			
		}
		
		?>
      
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="g1" role="tabpanel" aria-labelledby="v-pills-home-tab" align="justify">1974-1983-yillari institutga Farruh Nurmuhammedov rahbarlik qildi. Ish jarayonini o‘ziga xos uslubda tashkil etdi. Bu davrda ishga bo‘lgan talabchanlik kuchaydi, ijro intizomi mustahkamlandi. U kishining rahbarligida o‘quvchilarni respublika fan olimpiadalariga tayyorlash, yuqori natijalarga erishish ta’minlandi. Bu davrda samarali mehnat qilgan va yutuqlarga erishgan xodimlar o‘z vaqtida rag‘batlantirilib borildi. Institutning bir qator pedagogik xodimlari respublika pedagogik o'qishlarida faol ishtirok etib, O‘zbekiston Respublikasi Xalq ta’limi vazirligining “O‘zbekiston maorifi a’lochisi” nishoni bilan taqdirlanndilar. Mamato‘ra Mavlonov, Sa’dullo Fayziyev, Gulbarchin Xonsaitovlar shular jumlasidandir.<br>
1983-1984-yillar institur rektori vazifasida Bo&lsquo;rtaboy Qoraboyev ishladillar. U talabchanlik bilan institutga rahbarlik qildi. Institut jamoasi jipslashuvida, uni moddiy-texnik bazasini boyitishda, o&lsquo;quv xonalarini zamonaviy texnika vositalari bilan ta&rsquo;minlashda katta va samarali xizmat qildi. Ayniqsa, malaka oshirish kursi mashg&lsquo;ulotlarning sifat va samaradorligini oshirish, tinglovchilar bilan ijodiy hamkorlikni kuchaytirish, ilg&lsquo;or ish tajribalarini o&lsquo;rganish va ommalashtirish ishlariga bosh-qosh bo&lsquo;ldi.<br>
Qoraboyev rahbarligida ilk bor tinglovchilar uchun yotoqxonalar ajratilib, qulay shart-sharoit yaratildi.<br>
Bo&lsquo;rtaboy Qoraboyevich institut hayotida sezilarli iz qoldirgan rahbarlardan biri.
1984-1986-yillarda institutga Botir Ortiqboyev rahbarlik qildi. B.Ortiqboyev rahbarligida viloyat, respublika miqyosida turli ilmiy-amaliy seminarlar, anjumanlar o&lsquo;tkazildi. Ko&lsquo;plab metodik xat va tavsiyalar tayyorlanib, joylarga yetkazildi. Maktab va institut hamkorligi mustahkamlandi. Institut xodimlarining ijodkorlik faoliyati takomillashtirildi.
Viloyatimizdagi malaka oshirish tizimini takomillashtirishga o&lsquo;zining munosib hissasini qo&lsquo;shgan biri Oysuluv Vahobovna Akmambetovadir. U faoliyat ko&lsquo;rsatgan 1986-1993-yillar institut hayoti o&lsquo;ziga xos metodik xizmatni takomillashtirish, malaka oshirish kurslarini mazmundorligini va sifatini oshirishning yuqori darajaga erishish bilan izohlandi. Oysuluv Vahobovna rahbarligida fan xonalari zamon talabi asosida jihozlandi, ba&rsquo;zi fan kabinetlari bo&lsquo;limlarga aylantirildi. Uzluksiz metodik xizmat yanada takomillashtirildi. Tuman (shahar) XTBlari metodik xonalari bilan hamkorlikda doimiy harakatdagi seminarlar, rahbar xodimlar uchun ko&lsquo;plab maxsus qisqa muddatli maqsadli, muammoli kurslar tashkil etildi.
&ldquo;Davlat tili to&lsquo;g&lsquo;risida&rdquo;gi Qonunni amalga oshirish borasida turli tashkilotlarda &ldquo;O&lsquo;zbek tilini o&lsquo;rganish&rdquo; kurslari tashkil qilindi.</div>
      <div class="tab-pane fade" id="g2" role="tabpanel" aria-labelledby="v-pills-profile-tab">22222222222222222222222</div>
      <div class="tab-pane fade" id="g3" role="tabpanel" aria-labelledby="v-pills-messages-tab">333333333333333333333333333 3333333333333333 333333333333333333333333 333333333333333333333333333 33333333333333333333 3333333333333333333333333333333 </div>
      <div class="tab-pane fade" id="g4" role="tabpanel" aria-labelledby="v-pills-settings-tab">Mazkur ilm dargohi 1964-yil  25-aprelda Sirdaryo viloyati markaz Guliston shahrida tashkil etilgan bo&lsquo;lib, hozirgi kunda Sirdaryo viloyat xalq ta&rsquo;limi xodimlarini qayta tayyorlash va ularning malakasini oshirish hududiy markazi nomi bilan faoliyat ko&lsquo;rastmoqda.
Institutga ta&rsquo;lim sohasida uzoq yillar tajriba to&lsquo;plagan, bilimdon, o&lsquo;z sohasining yetuk mutaxassislari ishlash uchun jalb etildi. Bu ishga instiutga rahbarlik qilgan birinchi direktor I.Qurbonov bosh-qosh bo&lsquo;ldi.
1964-1976-yillari institutga Hamza Doniyorov direktor etib tayinlandi. Doniyorov rahbarligida institutni kadrlar bilan ta&rsquo;minlash, uning moddiy-texnik bazasini mustahkamlash, metodik mahsulotlar bilan viloyat ta&rsquo;lim muassasalarini ta&rsquo;minlash ishlari ancha jonlantirildi.
1971-1972-yillarda institutda Zikrillayev Rahmon direktorlik lavozimida ishladi. Bu kishi rahbarligi davrida ham bir qator ijobiy ishlar amalga oshirildi.
1972-yildan 1974-yilgacha tarix fanlari nomzodi, dotsent Tel&rsquo;man Javlonov rahbarlik qildi. Bu davrda institutning moddiy-texnika bazasi anchagina yaxshilandi. Tel&rsquo;man Javlonov kabinet mudirlari hamda metodistlarni tanlashda ularning bilimdonligini, tajribasini, o&lsquo;z fanini yaxshi bilishini hisobga olgan holda ishga qabul qilib, ta&rsquo;limni rivojlantirishda jonbozlik ko&lsquo;rsatdi. Tel&rsquo;man Javlonov haqiqiy olim, bilimdon inson edi. Har bir institut xodimi bilan tinmay ijodiy ish olib bordi, ularning ijodiy ishlashlari uchun shart-sharoit yaratdi.
Tel&rsquo;man Javlonovich ishga qabul qilishdan avval, ishga kelayotgan xodimga oldi bilan bir metodik tavsiya yoki metodik xatni berib, o&lsquo;z fikr-mulohazalarini qog&lsquo;ozga tushirib berish yoki taqriz yozib berishni so&lsquo;rardi, bu bilan kadrlarni tanlab joy-joyiga qo&lsquo;yishga e&rsquo;tibor kuchaytirdi.
Shu sababli institutda ko&lsquo;plab ilmiy-metodik tadbirlar, anjumanlar o&lsquo;tkazildi, metodik mahsulotlar tayyorlandi va metodik xizmat takomillashtirildi.
Fan xonalari o&lsquo;sha davr talablaridan kelib chiqqan holda qayta jihozlandi.
1974-1983-yillari institutga Farruh Nurmuhammedov rahbarlik qildi. Ish jarayonini o&lsquo;ziga xos uslubda tashkil etdi. Bu davrda ishga bo&lsquo;lgan talabchanlik kuchaydi, ijro intizomi mustahkamlandi. U kishining rahbarligida o&lsquo;quvchilarni respublika fan olimpiadalariga tayyorlash, yuqori natijalarga erishish ta&rsquo;minlandi. Bu davrda samarali mehnat qilgan va yutuqlarga erishgan xodimlar o&lsquo;z vaqtida rag&lsquo;batlantirilib borildi. Institutning bir qator pedagogik xodimlari respublika pedagogik o&lsquo;qishlarida faol ishtirok etib, O&lsquo;zbekiston Respublikasi Xalq ta&rsquo;limi vazirligining &ldquo;O&lsquo;zbekiston maorifi a&rsquo;lochisi&rdquo; nishoni bilan taqdirlanndilar. Mamato&lsquo;ra Mavlonov, Sa&rsquo;dullo Fayziyev, Gulbarchin Xonsaitovlar shular jumlasidandir.
1983-1984-yillar institur rektori vazifasida Bo&lsquo;rtaboy Qoraboyev ishladillar. U talabchanlik bilan institutga rahbarlik qildi. Institut jamoasi jipslashuvida, uni moddiy-texnik bazasini boyitishda, o&lsquo;quv xonalarini zamonaviy texnika vositalari bilan ta&rsquo;minlashda katta va samarali xizmat qildi. Ayniqsa, malaka oshirish kursi mashg&lsquo;ulotlarning sifat va samaradorligini oshirish, tinglovchilar bilan ijodiy hamkorlikni kuchaytirish, ilg&lsquo;or ish tajribalarini o&lsquo;rganish va ommalashtirish ishlariga bosh-qosh bo&lsquo;ldi.
Qoraboyev rahbarligida ilk bor tinglovchilar uchun yotoqxonalar ajratilib, qulay shart-sharoit yaratildi.
Bo&lsquo;rtaboy Qoraboyevich institut hayotida sezilarli iz qoldirgan rahbarlardan biri.
1984-1986-yillarda institutga Botir Ortiqboyev rahbarlik qildi. B.Ortiqboyev rahbarligida viloyat, respublika miqyosida turli ilmiy-amaliy seminarlar, anjumanlar o&lsquo;tkazildi. Ko&lsquo;plab metodik xat va tavsiyalar tayyorlanib, joylarga yetkazildi. Maktab va institut hamkorligi mustahkamlandi. Institut xodimlarining ijodkorlik faoliyati takomillashtirildi.
Viloyatimizdagi malaka oshirish tizimini takomillashtirishga o&lsquo;zining munosib hissasini qo&lsquo;shgan biri Oysuluv Vahobovna Akmambetovadir. U faoliyat ko&lsquo;rsatgan 1986-1993-yillar institut hayoti o&lsquo;ziga xos metodik xizmatni takomillashtirish, malaka oshirish kurslarini mazmundorligini va sifatini oshirishning yuqori darajaga erishish bilan izohlandi. Oysuluv Vahobovna rahbarligida fan xonalari zamon talabi asosida jihozlandi, ba&rsquo;zi fan kabinetlari bo&lsquo;limlarga aylantirildi. Uzluksiz metodik xizmat yanada takomillashtirildi. Tuman (shahar) XTBlari metodik xonalari bilan hamkorlikda doimiy harakatdagi seminarlar, rahbar xodimlar uchun ko&lsquo;plab maxsus qisqa muddatli maqsadli, muammoli kurslar tashkil etildi.
&ldquo;Davlat tili to&lsquo;g&lsquo;risida&rdquo;gi Qonunni amalga oshirish borasida turli tashkilotlarda &ldquo;O&lsquo;zbek tilini o&lsquo;rganish&rdquo; kurslari tashkil qilindi.
Fan olimpiadalari bo&lsquo;yicha respublika ko&lsquo;rsatgichlari yuqori darajalarda bo&lsquo;ldi. Viloyatda bir necha marta respublika miqyosda tadbirlar o&lsquo;tkazildi. Malaka oshirish kurslari o&lsquo;quv-mavzu rejalari va dasturlari qaytadan puxta ishlanib, doimiy ravishda kurs samaradorligi o&lsquo;rganilib borildi.
    Viloyatimizdagi ta&rsquo;limni hamda malaka oshirish tizimini islohot qilishda katta hissasini  qo&lsquo;shgan rahbarlardan biri Erkin Bakirovich Quybishev bo&lsquo;lgan.
Erkin Bakirovich institutga 1993-yilning dekabridan to 2001-yilning avgust oyigacha rahbarlik qildi. U o&lsquo;ta e&rsquo;tiqodli, ta&rsquo;lim sohasining bilimdoni, talabchan, zamon talabi bilan hamnafas tashkilotchi bo&lsquo;lib, ishlarni puxta reja asosida olib borardi. Erkin Bakirovich bor kuchini, ilmini, salohiyatini institutni respublikamizning boshqa institutlari qatoriga tenglashtirish va ko&lsquo;tarishga harakat qildi hamda bunga erishdilar ham.
2001-yilning avgustidan 2003-yilning iyun oyigacha institutda filologiya fanlari nomzodlari H.Yodgorov rektorlik lavozimida ishladi. Bu paytda prorektorlik vazifalariga fan nomzodlari tayinlandi. 
     H.Yodgorov rahbarlik qilgan davrda viloyat pedagogik xodimlarni malakasini oshirish institutga 2001-yilning 22-oktabridan boshlab viloyat pedagoglarni qayta tayyprlash va malakasini oshirish instituti maqomi berildi va shu kundan boshlab VPQTMOI to&lsquo;liq kafedra tizimiga o&lsquo;tdi.
Institutda oldingi 2 kafedra va bo&lsquo;limlar negizida 5 ta katta kafedra hamda 5 ta bo&lsquo;lim tashkil etildi. Kafedralarga mudir etib asosan ilmiy darajaga ega bo&lsquo;lgan xodimlar tayinlandi. H.Yodgorov institut professor-o&lsquo;qituvchilarining ilmiy salohiyatini kuchaytirish hamda ta&rsquo;lim jarayoni uchun ma&rsquo;ruza matnlarini zamonaviy pedagogik texnologiya asosida tuzishga e&rsquo;tiborini qaratdi.
     2003-yilning iyun oyidan 2004-yilning may oyigacha institutga biologiya fanlari nomzodi, dotsent Xolbo&lsquo;ta Mamatqulovich Mamatqulov rektorlik vazifasini bajarib keldi. U o&lsquo;z faoliyati davomida institutni moddiy-texnika bazasini yanada boyitish, salmoqli kadrlar bilan ta&rsquo;minlash, institut o&lsquo;quv auditoriyalari hamda fan xonalarini zamon talabi darajasida jihozlashga e&rsquo;tiborini kuchaytirdi. Yosh kadrlarga tajribali xodimlarni birikitirishi, ularning ishini, darslarini o&lsquo;rganib, metodik yordam berishini nazoratga olishlari, qolaversa, ko&lsquo;p yillar davomida shu institutda ishlab kelayotgan xodimlarning ilg&lsquo;or ish tajribasiga suyanishi, e&rsquo;tibori, qo&lsquo;llab-quvvatlagani tahsinga loyiq.
Xolbo&lsquo;ta Mamatqulov barcha metodik mahsulotlarmi pedagoglarning ehtiyojiga ko&lsquo;ra chiqarilishini yaxshi yo&lsquo;lga qo&lsquo;ydi. Professor-o&lsquo;qituvchilar tomonidan bir qancha YPT va DTSlari asosida metodik tavsiyalar, qo&lsquo;llanmalar va to&lsquo;plamlar ishlab chiqilgan va o&lsquo;qituvchilarga yetkazilgan.
2005-yil martidan institutga fizika-matematika fanlari nomzodi, dotsent K.Eshquvvatov rektor etib tayinlandi va 2010-yilga qadar faoliyat yuritdi. O&lsquo;ta kamtarin, madaniyatli va ilmiy salohiyatli olim viloyatda pedagog xodimlarni qayta tayyorlash va malaka oshirish tizimini takomillashtirishda hamda samarali tizimiga bosqichma-bosqich o&lsquo;z hissasini qo&lsquo;shgan.
Qisqa vaqt ichida Eshquvvatov rahbarligida malaka oshirish institut zamonaviy binoga ega bo&lsquo;ldi, kafedralarda tegishli o&lsquo;quv va laboratoriya xonalari tashkil etildi va bugungi kunm talabi darajasida jihozlandi hamda o&lsquo;quv-metodik ta&rsquo;minoti boyitildi. Institutning moddiy-texnika bazasi to&lsquo;liq ta&rsquo;minlandi va takomillashtirildi. Institutda 3 ta mini tipografiya, 2 ta kompyuter sinfi, 8 ta shaxsiy kompyuter va chop etish qurilmalari mavjud. Olim boshchiligida institut qoshida yagona hududiy masofadan o&lsquo;qitish markazi tashkil etilib, to&lsquo;liq kerakli orgtexnikalar bilan ta&rsquo;minlandi. 2006-yildan boshlab ilk bor &ldquo;Ilm nuri&rdquo; nomli ilmiy-metodik majmua tashkil etildi. 
2011-2014-yillar institutni biologiya fanlari doktori, professor Abduvohid Pazilov boshqardi. Mehnat intizomiga rioya qilishni jamoada shakllantirdi. O&lsquo;z ishiga mas&rsquo;uliyatli rahbar institutda &ldquo;Mahorat ko&lsquo;zgusi&rdquo; nomli ma&rsquo;naviy-ma&rsquo;rifiy, ilmiy-metodik gazetani chop etilishini yo&lsquo;lga qo&lsquo;yishda hissa qo&lsquo;shdi.
2015-2018-yillar institutni boshqargan pedagogika fanlari nomzodi, dotsent Pardaboy Xolmatov binoning holatini avvalgidan yanada yaxshilanishiga harakat qildi.
2018-2019 yillar muobaynida hududiy Markazni biologiya fanlari nomzodi, dotsent Sh.Turdimetov boshqarib keldi.
2019-yil noyabr oyida pedagogika fanlar nomzodi Nazarova Barno Alijonovna rektor etib tayinlandi.
Ayni vaqtda hududiy Markaz ixtiyorida 14 ta o&lsquo;quv xonasi, 2 ta o&lsquo;quv laboratoriyasi, 30 o&lsquo;rinli tinglovchilar turar joyi, 1 ta sport zali va maydoni, 1 ta majlis va konferensiyalar zali, axborot-resurs markazi va 1 ta oshxona mavjud, 4 ta kompyuter, 9 ta videoproyektor va 5 ta elektron doska o&lsquo;quv jarayonini samarali tashkil etishga xizmat qilmoqda.
     Hududiy markazda 46 nafar pedagog kadr bo&rsquo;lib, ulardan 35 nafari asosiy shtatda, 16 nafari soatbay va o&rsquo;rindoshlik asosida ishlab kelmoqda. Markazning ilmiy salohiyati 41 foizni tashkil etadi. O&rsquo;tgan 6 oy davomida Markaz ilmiy salohiyatini kuchaytirish, jamoada ishchanlik va ijodiy muhitni qaror toptirish, tinglovchilarning pedagogik mahoratini oshirish maqsadida mustaqil ijodiy va ilmiy tadqiqot ishlarini tashkil qilish, mehnat intizomi va shaxsiy mas&rsquo;uliyatni kuchaytirish masalalariga alohida e&rsquo;tibor qaratilmoqda. Shuningdek, institut hududi gulzorga aylantirilgan. Buyuk allomalarimizning hikmatlari aks ettirilgan bannerlar markaz hududiga o&lsquo;rnatilib chiqilgan. Mazkur muqaddas ilm dargohida faoliyat ko&lsquo;rsatayotgan jamoa a&rsquo;zolarining har bir kuni ijobiy natijalarga boyligi, samaradorligi va kamalakdek serjiloligi bilan barchaning olqishiga sazovordir. </div>
    </div>
  </div>
</div>
	
	
	</div>
	
<script>
function selectquestion(i){
	//console.log(i);
	btn = document.getElementById('qs'+i);
	btn.setAttribute("class","btn btn-success");
	asw = document.getElementsByTagName('javob')[i];
	console.log(asw.innerHTML);
	asw.innerHTML = '12212122132';
}	
	
</script>	

<?php
	include("block/footer.php")
?>