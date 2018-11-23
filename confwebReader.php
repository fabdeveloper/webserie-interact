<?php

// cargar configuracion excel
//echo "cargando IOFactory.php...";
include_once('../Excel/Classes/PHPExcel/IOFactory.php');
//echo "cargado IOFactory.php.";


$inputFileName = '../conf/confweb.xls';

$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcel = $objReader->load($inputFileName);



/*************************************************************/
// HEADER

$objPHPExcel->setActiveSheetIndexByName('header');

$headTitle = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$metaDescription = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
$metaAuthor = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();


/*************************************************************/
// INTRO

$objPHPExcel->setActiveSheetIndexByName('intro');

$introTitle = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$introDescription = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
$textoButtonIntro = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();

/*************************************************************/
// CARACTERISTICAS

$objPHPExcel->setActiveSheetIndexByName('caracteristicas');

$caracteristicasTitle = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$numCaracteristicas = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
$itemCaracteristicasIcon1 = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
$itemCaracteristicasTitle1 = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
$itemCaracteristicasDescription1 = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
$itemCaracteristicasIcon2 = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
$itemCaracteristicasTitle2 = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();
$itemCaracteristicasDescription2 = $objPHPExcel->getActiveSheet()->getCell('B9')->getValue();
$itemCaracteristicasIcon3 = $objPHPExcel->getActiveSheet()->getCell('B10')->getValue();
$itemCaracteristicasTitle3 = $objPHPExcel->getActiveSheet()->getCell('B11')->getValue();
$itemCaracteristicasDescription3 = $objPHPExcel->getActiveSheet()->getCell('B12')->getValue();
$itemCaracteristicasIcon4 = $objPHPExcel->getActiveSheet()->getCell('B13')->getValue();
$itemCaracteristicasTitle4 = $objPHPExcel->getActiveSheet()->getCell('B14')->getValue();
$itemCaracteristicasDescription4 = $objPHPExcel->getActiveSheet()->getCell('B15')->getValue();
$itemCaracteristicasIcon5 = $objPHPExcel->getActiveSheet()->getCell('B16')->getValue();
$itemCaracteristicasTitle5 = $objPHPExcel->getActiveSheet()->getCell('B17')->getValue();
$itemCaracteristicasDescription5 = $objPHPExcel->getActiveSheet()->getCell('B18')->getValue();
$itemCaracteristicasIcon6 = $objPHPExcel->getActiveSheet()->getCell('B19')->getValue();
$itemCaracteristicasTitle6 = $objPHPExcel->getActiveSheet()->getCell('B20')->getValue();
$itemCaracteristicasDescription6 = $objPHPExcel->getActiveSheet()->getCell('B21')->getValue();
$itemCaracteristicasIcon7 = $objPHPExcel->getActiveSheet()->getCell('B22')->getValue();
$itemCaracteristicasTitle7 = $objPHPExcel->getActiveSheet()->getCell('B23')->getValue();
$itemCaracteristicasDescription7 = $objPHPExcel->getActiveSheet()->getCell('B24')->getValue();
$itemCaracteristicasIcon8 = $objPHPExcel->getActiveSheet()->getCell('B25')->getValue();
$itemCaracteristicasTitle8 = $objPHPExcel->getActiveSheet()->getCell('B26')->getValue();
$itemCaracteristicasDescription8 = $objPHPExcel->getActiveSheet()->getCell('B27')->getValue();


require '../conf/ItemCaracteristicasObject.php';

$itemCaracteristicasObject1 = new ItemCaracteristicasObject();
$itemCaracteristicasObject2 = new ItemCaracteristicasObject();
$itemCaracteristicasObject3 = new ItemCaracteristicasObject();
$itemCaracteristicasObject4 = new ItemCaracteristicasObject();
$itemCaracteristicasObject5 = new ItemCaracteristicasObject();
$itemCaracteristicasObject6 = new ItemCaracteristicasObject();
$itemCaracteristicasObject7 = new ItemCaracteristicasObject();
$itemCaracteristicasObject8 = new ItemCaracteristicasObject();

$itemCaracteristicasObject1->set($itemCaracteristicasIcon1, $itemCaracteristicasTitle1, $itemCaracteristicasDescription1);
$itemCaracteristicasObject2->set($itemCaracteristicasIcon2, $itemCaracteristicasTitle2, $itemCaracteristicasDescription2);
$itemCaracteristicasObject3->set($itemCaracteristicasIcon3, $itemCaracteristicasTitle3, $itemCaracteristicasDescription3);
$itemCaracteristicasObject4->set($itemCaracteristicasIcon4, $itemCaracteristicasTitle4, $itemCaracteristicasDescription4);
$itemCaracteristicasObject5->set($itemCaracteristicasIcon5, $itemCaracteristicasTitle5, $itemCaracteristicasDescription5);
$itemCaracteristicasObject6->set($itemCaracteristicasIcon6, $itemCaracteristicasTitle6, $itemCaracteristicasDescription6);
$itemCaracteristicasObject7->set($itemCaracteristicasIcon7, $itemCaracteristicasTitle7, $itemCaracteristicasDescription7);
$itemCaracteristicasObject8->set($itemCaracteristicasIcon8, $itemCaracteristicasTitle8, $itemCaracteristicasDescription8);

$arrayItemsCaracteristicas = array($itemCaracteristicasObject1, $itemCaracteristicasObject2, $itemCaracteristicasObject3, $itemCaracteristicasObject4, $itemCaracteristicasObject5, $itemCaracteristicasObject6, $itemCaracteristicasObject7,$itemCaracteristicasObject8);    



/*************************************************************/
// ABOUT

$objPHPExcel->setActiveSheetIndexByName('about');

$pathImageAbout = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$titleAbout = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
$descriptionAbout = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
$titleListAbout = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
$numItemsAbout = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
$itemListAbout1 = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
$itemListAbout2 = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();
$itemListAbout3 = $objPHPExcel->getActiveSheet()->getCell('B9')->getValue();
$itemListAbout4 = $objPHPExcel->getActiveSheet()->getCell('B10')->getValue();
$itemListAbout5 = $objPHPExcel->getActiveSheet()->getCell('B11')->getValue();
$itemListAbout6 = $objPHPExcel->getActiveSheet()->getCell('B12')->getValue();
$itemListAbout7 = $objPHPExcel->getActiveSheet()->getCell('B13')->getValue();
$itemListAbout8 = $objPHPExcel->getActiveSheet()->getCell('B14')->getValue();


require '../conf/ItemAboutObject.php';

$itemAboutObject1 = new ItemAboutObject();
$itemAboutObject2 = new ItemAboutObject();
$itemAboutObject3 = new ItemAboutObject();
$itemAboutObject4 = new ItemAboutObject();
$itemAboutObject5 = new ItemAboutObject();
$itemAboutObject6 = new ItemAboutObject();
$itemAboutObject7 = new ItemAboutObject();
$itemAboutObject8 = new ItemAboutObject();

$itemAboutObject1->set($itemListAbout1);
$itemAboutObject2->set($itemListAbout2);
$itemAboutObject3->set($itemListAbout3);
$itemAboutObject4->set($itemListAbout4);
$itemAboutObject5->set($itemListAbout5);
$itemAboutObject6->set($itemListAbout6);
$itemAboutObject7->set($itemListAbout7);
$itemAboutObject8->set($itemListAbout8);


$arrayItemsAbout = array($itemAboutObject1, $itemAboutObject2, $itemAboutObject3, $itemAboutObject4, $itemAboutObject5, $itemAboutObject6, $itemAboutObject7, $itemAboutObject8);

/*************************************************************/
// INFOBLUE

$objPHPExcel->setActiveSheetIndexByName('infoblue');


$titleInfoBlue = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$descriptionInfoBlue = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
$numItemsInfoBlue = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
$iconItemInfoBlue1 = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
$titleItemInfoBlue1 = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
$descriptionItemInfoBlue1 = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
$iconItemInfoBlue2 = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();
$titleItemInfoBlue2 = $objPHPExcel->getActiveSheet()->getCell('B9')->getValue();
$descriptionItemInfoBlue2 = $objPHPExcel->getActiveSheet()->getCell('B10')->getValue();
$iconItemInfoBlue3 = $objPHPExcel->getActiveSheet()->getCell('B11')->getValue();
$titleItemInfoBlue3 = $objPHPExcel->getActiveSheet()->getCell('B12')->getValue();
$descriptionItemInfoBlue3 = $objPHPExcel->getActiveSheet()->getCell('B13')->getValue();
$iconItemInfoBlue4 = $objPHPExcel->getActiveSheet()->getCell('B14')->getValue();
$titleItemInfoBlue4 = $objPHPExcel->getActiveSheet()->getCell('B15')->getValue();
$descriptionItemInfoBlue4 = $objPHPExcel->getActiveSheet()->getCell('B16')->getValue();
$iconItemInfoBlue5 = $objPHPExcel->getActiveSheet()->getCell('B17')->getValue();
$titleItemInfoBlue5 = $objPHPExcel->getActiveSheet()->getCell('B18')->getValue();
$descriptionItemInfoBlue5 = $objPHPExcel->getActiveSheet()->getCell('B19')->getValue();
$iconItemInfoBlue6 = $objPHPExcel->getActiveSheet()->getCell('B20')->getValue();
$titleItemInfoBlue6 = $objPHPExcel->getActiveSheet()->getCell('B21')->getValue();
$descriptionItemInfoBlue6 = $objPHPExcel->getActiveSheet()->getCell('B22')->getValue();
$iconItemInfoBlue7 = $objPHPExcel->getActiveSheet()->getCell('B23')->getValue();
$titleItemInfoBlue7 = $objPHPExcel->getActiveSheet()->getCell('B24')->getValue();
$descriptionItemInfoBlue7 = $objPHPExcel->getActiveSheet()->getCell('B25')->getValue();
$iconItemInfoBlue8 = $objPHPExcel->getActiveSheet()->getCell('B26')->getValue();
$titleItemInfoBlue8 = $objPHPExcel->getActiveSheet()->getCell('B27')->getValue();
$descriptionItemInfoBlue8 = $objPHPExcel->getActiveSheet()->getCell('B28')->getValue();
$iconItemInfoBlue9 = $objPHPExcel->getActiveSheet()->getCell('B29')->getValue();
$titleItemInfoBlue9 = $objPHPExcel->getActiveSheet()->getCell('B30')->getValue();
$descriptionItemInfoBlue9 = $objPHPExcel->getActiveSheet()->getCell('B31')->getValue();


require '../conf/ItemInfoblueObject.php';

$itemInfoblueObject1 =  new ItemInfoblueObject();
$itemInfoblueObject2 =  new ItemInfoblueObject();
$itemInfoblueObject3 =  new ItemInfoblueObject();
$itemInfoblueObject4 =  new ItemInfoblueObject();
$itemInfoblueObject5 =  new ItemInfoblueObject();
$itemInfoblueObject6 =  new ItemInfoblueObject();
$itemInfoblueObject7 =  new ItemInfoblueObject();
$itemInfoblueObject8 =  new ItemInfoblueObject();
$itemInfoblueObject9 =  new ItemInfoblueObject();


$itemInfoblueObject1->set($iconItemInfoBlue1, $titleItemInfoBlue1, $descriptionItemInfoBlue1);
$itemInfoblueObject2->set($iconItemInfoBlue2, $titleItemInfoBlue2, $descriptionItemInfoBlue2);
$itemInfoblueObject3->set($iconItemInfoBlue3, $titleItemInfoBlue3, $descriptionItemInfoBlue3);
$itemInfoblueObject4->set($iconItemInfoBlue4, $titleItemInfoBlue4, $descriptionItemInfoBlue4);
$itemInfoblueObject5->set($iconItemInfoBlue5, $titleItemInfoBlue5, $descriptionItemInfoBlue5);
$itemInfoblueObject6->set($iconItemInfoBlue6, $titleItemInfoBlue6, $descriptionItemInfoBlue6);
$itemInfoblueObject7->set($iconItemInfoBlue7, $titleItemInfoBlue7, $descriptionItemInfoBlue7);
$itemInfoblueObject8->set($iconItemInfoBlue8, $titleItemInfoBlue8, $descriptionItemInfoBlue8);
$itemInfoblueObject9->set($iconItemInfoBlue9, $titleItemInfoBlue9, $descriptionItemInfoBlue9);


$arrayItemsInfoblue = array($itemInfoblueObject1, $itemInfoblueObject2, $itemInfoblueObject3, $itemInfoblueObject4, $itemInfoblueObject5, $itemInfoblueObject6, $itemInfoblueObject7, $itemInfoblueObject8, $itemInfoblueObject9);


/*************************************************************/
// GALLERY

$objPHPExcel->setActiveSheetIndexByName('gallery');


$titleGallery = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$descriptionGallery = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
$numItemsGallery = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();

$hrefImageItemGallery1 = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
$textoFlotanteDestinoImageItemGallery1 = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
$titleItemGallery1 = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
$pathImageItemGallery1 = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();
$textoFlotanteImageItemGallery1 = $objPHPExcel->getActiveSheet()->getCell('B9')->getValue();

$hrefImageItemGallery2 = $objPHPExcel->getActiveSheet()->getCell('B10')->getValue();
$textoFlotanteDestinoImageItemGallery2 = $objPHPExcel->getActiveSheet()->getCell('B11')->getValue();
$titleItemGallery2 = $objPHPExcel->getActiveSheet()->getCell('B12')->getValue();
$pathImageItemGallery2 = $objPHPExcel->getActiveSheet()->getCell('B13')->getValue();
$textoFlotanteImageItemGallery2 = $objPHPExcel->getActiveSheet()->getCell('B14')->getValue();
$hrefImageItemGallery3 = $objPHPExcel->getActiveSheet()->getCell('B15')->getValue();
$textoFlotanteDestinoImageItemGallery3 = $objPHPExcel->getActiveSheet()->getCell('B16')->getValue();
$titleItemGallery3 = $objPHPExcel->getActiveSheet()->getCell('B17')->getValue();
$pathImageItemGallery3 = $objPHPExcel->getActiveSheet()->getCell('B18')->getValue();
$textoFlotanteImageItemGallery3 = $objPHPExcel->getActiveSheet()->getCell('B19')->getValue();
$hrefImageItemGallery4 = $objPHPExcel->getActiveSheet()->getCell('B20')->getValue();
$textoFlotanteDestinoImageItemGallery4 = $objPHPExcel->getActiveSheet()->getCell('B21')->getValue();
$titleItemGallery4 = $objPHPExcel->getActiveSheet()->getCell('B22')->getValue();
$pathImageItemGallery4 = $objPHPExcel->getActiveSheet()->getCell('B23')->getValue();
$textoFlotanteImageItemGallery4 = $objPHPExcel->getActiveSheet()->getCell('B24')->getValue();
$hrefImageItemGallery5 = $objPHPExcel->getActiveSheet()->getCell('B25')->getValue();
$textoFlotanteDestinoImageItemGallery5 = $objPHPExcel->getActiveSheet()->getCell('B26')->getValue();
$titleItemGallery5 = $objPHPExcel->getActiveSheet()->getCell('B27')->getValue();
$pathImageItemGallery5 = $objPHPExcel->getActiveSheet()->getCell('B28')->getValue();
$textoFlotanteImageItemGallery5 = $objPHPExcel->getActiveSheet()->getCell('B29')->getValue();
$hrefImageItemGallery6 = $objPHPExcel->getActiveSheet()->getCell('B30')->getValue();
$textoFlotanteDestinoImageItemGallery6 = $objPHPExcel->getActiveSheet()->getCell('B31')->getValue();
$titleItemGallery6 = $objPHPExcel->getActiveSheet()->getCell('B32')->getValue();
$pathImageItemGallery6 = $objPHPExcel->getActiveSheet()->getCell('B33')->getValue();
$textoFlotanteImageItemGallery6 = $objPHPExcel->getActiveSheet()->getCell('B34')->getValue();
$hrefImageItemGallery7 = $objPHPExcel->getActiveSheet()->getCell('B35')->getValue();
$textoFlotanteDestinoImageItemGallery7 = $objPHPExcel->getActiveSheet()->getCell('B36')->getValue();
$titleItemGallery7 = $objPHPExcel->getActiveSheet()->getCell('B37')->getValue();
$pathImageItemGallery7 = $objPHPExcel->getActiveSheet()->getCell('B38')->getValue();
$textoFlotanteImageItemGallery7 = $objPHPExcel->getActiveSheet()->getCell('B39')->getValue();
$hrefImageItemGallery8 = $objPHPExcel->getActiveSheet()->getCell('B40')->getValue();
$textoFlotanteDestinoImageItemGallery8 = $objPHPExcel->getActiveSheet()->getCell('B41')->getValue();
$titleItemGallery8 = $objPHPExcel->getActiveSheet()->getCell('B42')->getValue();
$pathImageItemGallery8 = $objPHPExcel->getActiveSheet()->getCell('B43')->getValue();
$textoFlotanteImageItemGallery8 = $objPHPExcel->getActiveSheet()->getCell('B44')->getValue();
$hrefImageItemGallery9 = $objPHPExcel->getActiveSheet()->getCell('B45')->getValue();
$textoFlotanteDestinoImageItemGallery9 = $objPHPExcel->getActiveSheet()->getCell('B46')->getValue();
$titleItemGallery9 = $objPHPExcel->getActiveSheet()->getCell('B47')->getValue();
$pathImageItemGallery9 = $objPHPExcel->getActiveSheet()->getCell('B48')->getValue();
$textoFlotanteImageItemGallery9 = $objPHPExcel->getActiveSheet()->getCell('B49')->getValue();
$hrefImageItemGallery10 = $objPHPExcel->getActiveSheet()->getCell('B50')->getValue();
$textoFlotanteDestinoImageItemGallery10 = $objPHPExcel->getActiveSheet()->getCell('B51')->getValue();
$titleItemGallery10 = $objPHPExcel->getActiveSheet()->getCell('B52')->getValue();
$pathImageItemGallery10 = $objPHPExcel->getActiveSheet()->getCell('B53')->getValue();
$textoFlotanteImageItemGallery10 = $objPHPExcel->getActiveSheet()->getCell('B54')->getValue();
$hrefImageItemGallery11 = $objPHPExcel->getActiveSheet()->getCell('B55')->getValue();
$textoFlotanteDestinoImageItemGallery11 = $objPHPExcel->getActiveSheet()->getCell('B56')->getValue();
$titleItemGallery11 = $objPHPExcel->getActiveSheet()->getCell('B57')->getValue();
$pathImageItemGallery11 = $objPHPExcel->getActiveSheet()->getCell('B58')->getValue();
$textoFlotanteImageItemGallery11 = $objPHPExcel->getActiveSheet()->getCell('B59')->getValue();
$hrefImageItemGallery12 = $objPHPExcel->getActiveSheet()->getCell('B60')->getValue();
$textoFlotanteDestinoImageItemGallery12 = $objPHPExcel->getActiveSheet()->getCell('B61')->getValue();
$titleItemGallery12 = $objPHPExcel->getActiveSheet()->getCell('B62')->getValue();
$pathImageItemGallery12 = $objPHPExcel->getActiveSheet()->getCell('B63')->getValue();
$textoFlotanteImageItemGallery12 = $objPHPExcel->getActiveSheet()->getCell('B64')->getValue();


require '../conf/ItemGalleryObject.php';

$itemGalleryObject1 = new ItemGalleryObject();
$itemGalleryObject2 = new ItemGalleryObject();
$itemGalleryObject3 = new ItemGalleryObject();
$itemGalleryObject4 = new ItemGalleryObject();
$itemGalleryObject5 = new ItemGalleryObject();
$itemGalleryObject6 = new ItemGalleryObject();
$itemGalleryObject7 = new ItemGalleryObject();
$itemGalleryObject8 = new ItemGalleryObject();
$itemGalleryObject9 = new ItemGalleryObject();
$itemGalleryObject10 = new ItemGalleryObject();
$itemGalleryObject11 = new ItemGalleryObject();
$itemGalleryObject12 = new ItemGalleryObject();

$itemGalleryObject1->set($hrefImageItemGallery1, $textoFlotanteDestinoImageItemGallery1, $titleItemGallery1, $pathImageItemGallery1, $textoFlotanteImageItemGallery1);
$itemGalleryObject2->set($hrefImageItemGallery2, $textoFlotanteDestinoImageItemGallery2, $titleItemGallery2, $pathImageItemGallery2, $textoFlotanteImageItemGallery2);
$itemGalleryObject3->set($hrefImageItemGallery3, $textoFlotanteDestinoImageItemGallery3, $titleItemGallery3, $pathImageItemGallery3, $textoFlotanteImageItemGallery3);
$itemGalleryObject4->set($hrefImageItemGallery4, $textoFlotanteDestinoImageItemGallery4, $titleItemGallery4, $pathImageItemGallery4, $textoFlotanteImageItemGallery4);
$itemGalleryObject5->set($hrefImageItemGallery5, $textoFlotanteDestinoImageItemGallery5, $titleItemGallery5, $pathImageItemGallery5, $textoFlotanteImageItemGallery5);
$itemGalleryObject6->set($hrefImageItemGallery6, $textoFlotanteDestinoImageItemGallery6, $titleItemGallery6, $pathImageItemGallery6, $textoFlotanteImageItemGallery6);
$itemGalleryObject7->set($hrefImageItemGallery7, $textoFlotanteDestinoImageItemGallery7, $titleItemGallery7, $pathImageItemGallery7, $textoFlotanteImageItemGallery7);
$itemGalleryObject8->set($hrefImageItemGallery8, $textoFlotanteDestinoImageItemGallery8, $titleItemGallery8, $pathImageItemGallery8, $textoFlotanteImageItemGallery8);
$itemGalleryObject9->set($hrefImageItemGallery9, $textoFlotanteDestinoImageItemGallery9, $titleItemGallery9, $pathImageItemGallery9, $textoFlotanteImageItemGallery9);
$itemGalleryObject10->set($hrefImageItemGallery10, $textoFlotanteDestinoImageItemGallery10, $titleItemGallery10, $pathImageItemGallery10, $textoFlotanteImageItemGallery10);
$itemGalleryObject11->set($hrefImageItemGallery11, $textoFlotanteDestinoImageItemGallery11, $titleItemGallery11, $pathImageItemGallery11, $textoFlotanteImageItemGallery11);
$itemGalleryObject12->set($hrefImageItemGallery12, $textoFlotanteDestinoImageItemGallery12, $titleItemGallery12, $pathImageItemGallery12, $textoFlotanteImageItemGallery12);


$arrayItemsGallery = array($itemGalleryObject1, $itemGalleryObject2, $itemGalleryObject3, $itemGalleryObject4, $itemGalleryObject5, $itemGalleryObject6, $itemGalleryObject7, $itemGalleryObject8, $itemGalleryObject9, $itemGalleryObject10, $itemGalleryObject11, $itemGalleryObject12);


/*************************************************************/
// TESTIMONIAL

$objPHPExcel->setActiveSheetIndexByName('testimonial');


$titleTestimonial = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$numItemsTestimonial = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
$pathImageItemTestimonial1 = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
$parrafoItemTestimonial1 = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
$firmaItemTestimonial1 = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
$pathImageItemTestimonial2 = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
$parrafoItemTestimonial2 = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();
$firmaItemTestimonial2 = $objPHPExcel->getActiveSheet()->getCell('B9')->getValue();
$pathImageItemTestimonial3 = $objPHPExcel->getActiveSheet()->getCell('B10')->getValue();
$parrafoItemTestimonial3 = $objPHPExcel->getActiveSheet()->getCell('B11')->getValue();
$firmaItemTestimonial3 = $objPHPExcel->getActiveSheet()->getCell('B12')->getValue();
$pathImageItemTestimonial4 = $objPHPExcel->getActiveSheet()->getCell('B13')->getValue();
$parrafoItemTestimonial4 = $objPHPExcel->getActiveSheet()->getCell('B14')->getValue();
$firmaItemTestimonial4 = $objPHPExcel->getActiveSheet()->getCell('B15')->getValue();
$pathImageItemTestimonial5 = $objPHPExcel->getActiveSheet()->getCell('B16')->getValue();
$parrafoItemTestimonial5 = $objPHPExcel->getActiveSheet()->getCell('B17')->getValue();
$firmaItemTestimonial5 = $objPHPExcel->getActiveSheet()->getCell('B18')->getValue();
$pathImageItemTestimonial6 = $objPHPExcel->getActiveSheet()->getCell('B19')->getValue();
$parrafoItemTestimonial6 = $objPHPExcel->getActiveSheet()->getCell('B20')->getValue();
$firmaItemTestimonial6 = $objPHPExcel->getActiveSheet()->getCell('B21')->getValue();


require '../conf/ItemTestimonialObject.php';

$itemTestimonialObject1 = new ItemTestimonialObject();
$itemTestimonialObject2 = new ItemTestimonialObject();
$itemTestimonialObject3 = new ItemTestimonialObject();
$itemTestimonialObject4 = new ItemTestimonialObject();
$itemTestimonialObject5 = new ItemTestimonialObject();
$itemTestimonialObject6 = new ItemTestimonialObject();


$itemTestimonialObject1->set($pathImageItemTestimonial1, $parrafoItemTestimonial1, $firmaItemTestimonial1);
$itemTestimonialObject2->set($pathImageItemTestimonial2, $parrafoItemTestimonial2, $firmaItemTestimonial2);
$itemTestimonialObject3->set($pathImageItemTestimonial3, $parrafoItemTestimonial3, $firmaItemTestimonial3);
$itemTestimonialObject4->set($pathImageItemTestimonial4, $parrafoItemTestimonial4, $firmaItemTestimonial4);
$itemTestimonialObject5->set($pathImageItemTestimonial5, $parrafoItemTestimonial5, $firmaItemTestimonial5);
$itemTestimonialObject6->set($pathImageItemTestimonial6, $parrafoItemTestimonial6, $firmaItemTestimonial6);


$arrayItemsTestimonial = array($itemTestimonialObject1, $itemTestimonialObject2, $itemTestimonialObject3, $itemTestimonialObject4, $itemTestimonialObject5, $itemTestimonialObject6);

/*************************************************************/
// TEAM

$objPHPExcel->setActiveSheetIndexByName('team');

$titleTeam = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$descriptionTeam = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
$numItemsTeam = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
$pathImageItemTeam1 = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
$titleItemTeam1 = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
$descriptionItemTeam1 = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
$pathImageItemTeam2 = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();
$titleItemTeam2 = $objPHPExcel->getActiveSheet()->getCell('B9')->getValue();
$descriptionItemTeam2 = $objPHPExcel->getActiveSheet()->getCell('B10')->getValue();
$pathImageItemTeam3 = $objPHPExcel->getActiveSheet()->getCell('B11')->getValue();
$titleItemTeam3 = $objPHPExcel->getActiveSheet()->getCell('B12')->getValue();
$descriptionItemTeam3 = $objPHPExcel->getActiveSheet()->getCell('B13')->getValue();
$pathImageItemTeam4 = $objPHPExcel->getActiveSheet()->getCell('B14')->getValue();
$titleItemTeam4 = $objPHPExcel->getActiveSheet()->getCell('B15')->getValue();
$descriptionItemTeam4 = $objPHPExcel->getActiveSheet()->getCell('B16')->getValue();
$pathImageItemTeam5 = $objPHPExcel->getActiveSheet()->getCell('B17')->getValue();
$titleItemTeam5 = $objPHPExcel->getActiveSheet()->getCell('B18')->getValue();
$descriptionItemTeam5 = $objPHPExcel->getActiveSheet()->getCell('B19')->getValue();
$pathImageItemTeam6 = $objPHPExcel->getActiveSheet()->getCell('B20')->getValue();
$titleItemTeam6 = $objPHPExcel->getActiveSheet()->getCell('B21')->getValue();
$descriptionItemTeam6 = $objPHPExcel->getActiveSheet()->getCell('B22')->getValue();
$pathImageItemTeam7 = $objPHPExcel->getActiveSheet()->getCell('B23')->getValue();
$titleItemTeam7 = $objPHPExcel->getActiveSheet()->getCell('B24')->getValue();
$descriptionItemTeam7 = $objPHPExcel->getActiveSheet()->getCell('B25')->getValue();
$pathImageItemTeam8 = $objPHPExcel->getActiveSheet()->getCell('B26')->getValue();
$titleItemTeam8 = $objPHPExcel->getActiveSheet()->getCell('B27')->getValue();
$descriptionItemTeam8 = $objPHPExcel->getActiveSheet()->getCell('B28')->getValue();


require '../conf/ItemTeamObject.php';

$itemTeamObject1 = new ItemTeamObject();
$itemTeamObject2 = new ItemTeamObject();
$itemTeamObject3 = new ItemTeamObject();
$itemTeamObject4 = new ItemTeamObject();
$itemTeamObject5 = new ItemTeamObject();
$itemTeamObject6 = new ItemTeamObject();
$itemTeamObject7 = new ItemTeamObject();
$itemTeamObject8 = new ItemTeamObject();


$itemTeamObject1->set($pathImageItemTeam1, $titleItemTeam1, $descriptionItemTeam1);
$itemTeamObject2->set($pathImageItemTeam2, $titleItemTeam2, $descriptionItemTeam2);
$itemTeamObject3->set($pathImageItemTeam3, $titleItemTeam3, $descriptionItemTeam3);
$itemTeamObject4->set($pathImageItemTeam4, $titleItemTeam4, $descriptionItemTeam4);
$itemTeamObject5->set($pathImageItemTeam5, $titleItemTeam5, $descriptionItemTeam5);
$itemTeamObject6->set($pathImageItemTeam6, $titleItemTeam6, $descriptionItemTeam6);
$itemTeamObject7->set($pathImageItemTeam7, $titleItemTeam7, $descriptionItemTeam7);
$itemTeamObject8->set($pathImageItemTeam8, $titleItemTeam8, $descriptionItemTeam8);

$arrayItemsTeam = array($itemTeamObject1, $itemTeamObject2, $itemTeamObject3, $itemTeamObject4, $itemTeamObject5, $itemTeamObject6, $itemTeamObject7, $itemTeamObject8);



/*************************************************************/
// CONTACT

$objPHPExcel->setActiveSheetIndexByName('contact');

$titleContact = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$descriptionContact = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
$titleContactInfo = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
$numItemsContactInfo = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
$iconItemContactInfo1 = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
$nameItemContactInfo1 = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
$valueItemContactInfo1 = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();
$iconItemContactInfo2 = $objPHPExcel->getActiveSheet()->getCell('B9')->getValue();
$nameItemContactInfo2 = $objPHPExcel->getActiveSheet()->getCell('B10')->getValue();
$valueItemContactInfo2 = $objPHPExcel->getActiveSheet()->getCell('B11')->getValue();
$iconItemContactInfo3 = $objPHPExcel->getActiveSheet()->getCell('B12')->getValue();
$nameItemContactInfo3 = $objPHPExcel->getActiveSheet()->getCell('B13')->getValue();
$valueItemContactInfo3 = $objPHPExcel->getActiveSheet()->getCell('B14')->getValue();
$iconItemContactInfo4 = $objPHPExcel->getActiveSheet()->getCell('B15')->getValue();
$nameItemContactInfo4 = $objPHPExcel->getActiveSheet()->getCell('B16')->getValue();
$valueItemContactInfo4 = $objPHPExcel->getActiveSheet()->getCell('B17')->getValue();


require '../conf/ItemContactinfoObject.php';

$itemContactinfoObject1 = new ItemContactinfoObject();
$itemContactinfoObject2 = new ItemContactinfoObject();
$itemContactinfoObject3 = new ItemContactinfoObject();
$itemContactinfoObject4 = new ItemContactinfoObject();

$itemContactinfoObject1->set($iconItemContactInfo1, $nameItemContactInfo1, $valueItemContactInfo1);
$itemContactinfoObject2->set($iconItemContactInfo2, $nameItemContactInfo2, $valueItemContactInfo2);
$itemContactinfoObject3->set($iconItemContactInfo3, $nameItemContactInfo3, $valueItemContactInfo3);
$itemContactinfoObject4->set($iconItemContactInfo4, $nameItemContactInfo4, $valueItemContactInfo4);


$arrayItemsContactInfo = array($itemContactinfoObject1, $itemContactinfoObject2, $itemContactinfoObject3, $itemContactinfoObject4);



/*************************************************************/
// SOCIAL

$objPHPExcel->setActiveSheetIndexByName('social');

$numItemsSocial = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$hrefItemSocial1 = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
$iconItemSocial1 = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
$hrefItemSocial2 = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
$iconItemSocial2 = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
$hrefItemSocial3 = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
$iconItemSocial3 = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();
$hrefItemSocial4 = $objPHPExcel->getActiveSheet()->getCell('B9')->getValue();
$iconItemSocial4 = $objPHPExcel->getActiveSheet()->getCell('B10')->getValue();
$hrefItemSocial5 = $objPHPExcel->getActiveSheet()->getCell('B11')->getValue();
$iconItemSocial5 = $objPHPExcel->getActiveSheet()->getCell('B12')->getValue();
$hrefItemSocial6 = $objPHPExcel->getActiveSheet()->getCell('B13')->getValue();
$iconItemSocial6 = $objPHPExcel->getActiveSheet()->getCell('B14')->getValue();


require '../conf/ItemSocialObject.php';

$itemSocialObject1 = new ItemSocialObject();
$itemSocialObject2 = new ItemSocialObject();
$itemSocialObject3 = new ItemSocialObject();
$itemSocialObject4 = new ItemSocialObject();
$itemSocialObject5 = new ItemSocialObject();
$itemSocialObject6 = new ItemSocialObject();


$itemSocialObject1->set($hrefItemSocial1, $iconItemSocial1);
$itemSocialObject2->set($hrefItemSocial2, $iconItemSocial2);
$itemSocialObject3->set($hrefItemSocial3, $iconItemSocial3);
$itemSocialObject4->set($hrefItemSocial4, $iconItemSocial4);
$itemSocialObject5->set($hrefItemSocial5, $iconItemSocial5);
$itemSocialObject6->set($hrefItemSocial6, $iconItemSocial6);



$arrayItemsSocial = array($itemSocialObject1, $itemSocialObject2, $itemSocialObject3, $itemSocialObject4, $itemSocialObject5, $itemSocialObject6);

/*************************************************************/
// NAVBAR

$objPHPExcel->setActiveSheetIndexByName('navbar');

$navbarTitle = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$navbarTexto1 = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
$navbarTexto2 = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
$navbarTexto3 = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
$navbarTexto4 = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
$navbarTexto5 = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
$navbarTexto6 = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();
$navbarTexto7 = $objPHPExcel->getActiveSheet()->getCell('B9')->getValue();



/*************************************************************/
// FOOTER

$objPHPExcel->setActiveSheetIndexByName('footer');

$textFooter = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();





/*************************************************************/
// SHOW

$objPHPExcel->setActiveSheetIndexByName('show');

$caracteristicas = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
$about = $objPHPExcel->getActiveSheet()->getCell('B3')->getValue();
$infoblue = $objPHPExcel->getActiveSheet()->getCell('B4')->getValue();
$gallery = $objPHPExcel->getActiveSheet()->getCell('B5')->getValue();
$testimonial = $objPHPExcel->getActiveSheet()->getCell('B6')->getValue();
$team = $objPHPExcel->getActiveSheet()->getCell('B7')->getValue();
$contact = $objPHPExcel->getActiveSheet()->getCell('B8')->getValue();





/*************************************************************/
// EMAILCONF

$objPHPExcel->setActiveSheetIndexByName('emailconf');

$diremail = $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();



?>