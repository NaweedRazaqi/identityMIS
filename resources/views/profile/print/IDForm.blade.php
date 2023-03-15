
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> فورم تثبیت هویت </title>
    <link href="../assets/css/page.css" rel="stylesheet" />
    <link href="../assets/css/formcss.css" rel="stylesheet" />
    <style>
      
   
        table {
            border-spacing: 0;
            border-collapse: collapse;
            width: 97%;
            margin-top: 20px;
            position: relative;
            top: -15px;
            left: 10px;
        }

    
      
        .table-bordered > tbody > tr > td, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > td, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > thead > tr > th {
            border: 2px solid #272727;
            border-top-color: rgb(27, 26, 26);
            border-top-style: solid;
            border-top-width: 1px;
        }

        td, th {
            font-size: 12px !important;
            padding: 5px;
        }

        body {
            background: #737373;
        }

     
       
        #tbl {
            border-spacing: 0;
            border-collapse: collapse;
        border:2px solid;
        }

    </style>
    <script src="../assets/js/jquery.min.js"></script>
     <script src="../assets/js/jsBarcode.all.js"></script>
</head>
<body style="direction:ltr;">
    <div id="form" class="div-mainform div-form" style="margin-right:auto; margin-left:auto;">
      
        <div class="row">
            <table class="tableM">
                <thead>
                    <tr>
                        <td>
                            <div class="mainlogo">
                                <img src="../images/afghanistanlogo.jpg" width="90" alt="">
                            </div>
                        </td>
                    </tr>
                    @foreach($candidateInfo as $cand)
                    <input type="hidden" value="{{$cand->code}}" id="code_print" />
                    <tr>
                        <td>
                            <div class="rowM">
                                <div class="MLeftLogoSection">
                                    <h3> جنرال کنسلگری</h3>
                                    <h3>جمهوری اسلامی افغانستان </h3>
                                    <h4 style="color:#e0c07e"> مونشن - آلمان</h4>
                                </div>
        
                                <div class="MRightLogoSection">
                                    <h3>د افغانستان اسلامی جمهوریت </h3>
                                    <h3>جنرال کنسلگری</h3>
                                    <h4 style="color:#e0c07e"> مونشن - آلمان</h4>
                                </div>
                                <div class="MMiddleTextSection">
                                    <h3>General Consultant of</h3>
                                    <h3>ISLAMIC REPUBLIC of AFGHANISTAN</h3>
                                    <h4 style="color:#e0c07e">Munich - Germany</h4><br>
                                    <h4>دهویت تصدیق پانه/ورقه تثبیت هویت</h4>
                                </div>
                            </div>
                            <div class="MNumberSection">
                                <h3>شماره: <span>{{$cand->code}}</span></h3>
                            </div>
                            <div class="MDateSection">
                                <h3>تاریخ: <span> {{$cand->created_at}}</span></h3>
                            </div>
                            <div class="bardcode">
                                <li class="img-barcode" float="left">
                                    <svg id="barcode1"></svg>
                                </li>
                            </div>
                      </td>                   
                     </tr>
                     @endforeach
                </thead>

            </table>
           
            <div class="candidatedetal">
               
                <table width="100%" class="table-bordered maintabl"dir="rtl" >
                 
                    <tbody style="direction:rtl">
                        <tr id="titletr">
                            <th colspan="1"></th>
                            <th scope="row" id="tableTitle" colspan="2" width="70%">1. شهرت</th>
                    </tr>
                    @foreach($candidateInfo as $cand)
                        <tr>
                            <td>
                                <span>کورنۍ نوم / نام خانواد گی:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$cand->lastname}}</span>
                            </td>
                            
                        </tr>
                        <tr >
                            <td>
                                <span>نوم / نام:</span>
                            </td>
                            <td>
                                <span id="datafetch"> {{$cand->firstname}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>د پالر نوم / نام پدر:</span>
                            </td>
                            <td>
                                <span id="datafetch"> {{$cand->fathername}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>د نیکه نوم / نام پدر کالن:</span>
                            </td>
                            <td>
                                <span id="datafetch"> {{$cand->grandfathername}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>د پیدایښت ځای / محل تولد:</span>
                            </td>
                            <td>
                                <span id="datafetch"> {{$cand->placeofbirthID == 32 ? $cand->outside : $cand->placeofbrith}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>د زیږیدو نیټه / تاریخ تولد:</span>
                            </td>
                            <td>
                                <span id="datafetch">{{$cand->dateofbirth}} </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>مدين حالت / حالت مدنی:</span>
                            </td>
                            <td>
                                <span id="datafetch">{{$cand->maritalstatus}} </span>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
             <div class="canidataphot">
                <table width="100%"dir="rtl"class="table-bordered maintabl">
                    <thead>
                       
                    </thead>
                   <tbody>
                    <tr>
                        <td>
                           <span id="apPhoto">محل نصب عکس</span>
                        </td>
                    </tr>
                   </tbody>
                </table>
             </div>
             <div class="candidateAddress" >
                <table width="100%" class="table-bordered maintabl" dir="rtl">
                    <thead>
                        <tr id="titletr">
                            <th scope="row" id="tableTitle" colspan="2" width="60%"> 2- اصلی استوګنځی / سکونت اصلی </th>
                     
                        </tr>
                    </thead>
                    @foreach($candidateExtraDetails as $adr)
                   <tbody>

                       <tr>
                            <td>
                                <span>کلی / قریه:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$adr->vilg}} </span>
                            </td>
                       </tr>
                       <tr>
                            <td>
                                <span >و لسوالی:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$adr->dist}} </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>والیت:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$adr->provincename}}</span>
                            </td>
                            
                        </tr>
                        <tr id="titletr">
                            <th colspan="1"  width="40%"></th>
                            <th scope="row" id="tableTitle" colspan="2" width="60%" style="font-size: 15px !important"> ３ -اوسنی استوګنځی / محل اقامت فعلی</th>
                           
                        </tr>
                        <tr>
                            <td>
                                <span>تاریخ مهاجرت از افغانستان:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$adr->imigratingDate}}</span>
                            </td>
                       </tr>
                        <tr>
                            <td>
                                <span>د کور شمیره / شامره منزل:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$adr->houseNo}}</span>
                            </td>
                       </tr>
                       <tr>
                            <td>
                                <span >کوڅه /کوچه</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$adr->streetNo}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>شهر/ والیت:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$adr->city}}</span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <span>هیواد /کشور:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$adr->countryname}}</span>
                            </td>
                            
                        </tr>
                        <tr id="titletr">
                            <th colspan="1"  width="40%"></th>
                            <th scope="row" id="tableTitle" colspan="2" width="60%" style="font-size: 15px !important">４ -دنده / شغل یا وظیفه</th>
                           
                        </tr>
                        <tr>
                            <td>
                                <span>وظیفه قبلی در افغانستان:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$adr->afghjob}}</span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <span>وظیفه در خارج:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$adr->forgnjob}}</span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <span>شامره تلیفون:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$adr->jobphone}}</span>
                            </td>
                            
                        </tr>
                        @endforeach
                   </tbody>
                </table>
             </div>
             <div class="candidatespecifications">
                <table width="100%" class="table-bordered maintabl" dir="rtl">
                    <thead>
                        <tr id="titletr">
                            <th id="tableTitle" colspan="3" width="80%"style="font-size: 14px !important"> ８ -علایم فارقه یا مشخصات فزیکی شخص</th>
                           
                    </tr>
                    </thead>
                    @foreach($candidateInfo as $cands)
                   <tbody>
                       <tr>
                            <td>
                                <span>لوړوالی / قد:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$cands->hight}}</span>
                            </td>
                       </tr>
                       <tr>
                            <td>
                                <span> د سرتګو رنګ / رنگ چشم:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$cands->eyecolor}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span> د پوستکي رنګ / رنگ پوست:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$cands->skincolor}}</span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <span>د ویښتانو رنګ / رنگ موی:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$cands->otherIdent}}</span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <span>  نورې نښې / سایر عالیم:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$cands->otherIdent}}</span>
                            </td>
                            
                        </tr>
                        @endforeach
                        <tr id="titletr">
                            <th scope="row" id="tableTitle" colspan="2" width="80%" style="font-size: 14px !important">７ -دلیل نداشتن تذکره افغانستان </th>
                           
                        </tr>
                        @foreach($candidateExtraDetails as $ident)
                        <tr>
                            <td>
                                <span style="font-size:12px !important; font-weight:900;">په بهر کې زیږیدلی/تولد در خارج:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$ident->birthinforgn == 1 ?'بلی':'نخیر'}}</span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <span> نه تر السه کول / اخذ نکردن:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$ident->nothavingID == 1 ?'بلی':'نخیر'}}</span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <span> ورک شوی / مفقود شدن: </span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$ident->lostID == 1 ?'بلی':'نخیر'}}</span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <span> سوځول شوی / حریق شدن:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$ident->burntID == 1 ?'بلی':'نخیر'}}</span>
                            </td>
                            
                        </tr>
                        <tr id="titletr">
                            <th colspan="1"  width="40%"></th>
                            <th scope="row" id="tableTitle" colspan="3" width="60%" style="font-size: 15px !important"> ６ -سند دست داشته فعلی</th>
                          
                        </tr>
                        <tr>
                            <td>
                                <span> کارت هویت / الیسنس دریوری:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$ident->dirverliscens == 1 ? 'بلی':'نخیر'}}</span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <span> پاسپورت / کارت اقامت:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$ident->currnamefars}}</span>
                            </td>
                            
                        </tr>
                        @endforeach
                   </tbody>
                </table>
             </div>
             <div class="candidaterelatives">
                <table width="100%" class="table-bordered maintabl" dir="rtl">
                    <thead>
                        <tr id="titletr">
                            <th scope="row" id="tableTitle" colspan="2" width="80%"> ５ -د شخص یا د خپلوانو د دفتر توضیحات / مشخصات دفتر اساس شخص یا اقارب اصولی</th>
                            
                        </tr>
                    </thead>
                </table>
             </div>
                <div class="relativedetails">
                <table class="table-bordered maintabl" dir="rtl">
             
                   <tbody>
                    @foreach($candidateExtraDetails as $rel)
                       <tr>
                            <td>
                                <span>د تړاو ډول / نوع قرابت:</span>
                            </td>
                            <td id="dataload" colspan="2" width="30%">
                                <span id="datafetch"> {{$rel->relativetypename == null ? 'ندارد':$rel->relativetypename}}</span>
                            </td>
                            <td>
                                <span>  د جلد شمیره / شامره جلد:</span>
                            </td>
                            <td id="dataload" colspan="2" width="30%">
                                <span id="datafetch"> {{$rel->juldNo}}</span>
                            </td>
                       </tr>
                       <tr>
                            <td>
                                <span>نوم / نام:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$rel->firstname}}</span>
                            </td>
                            <td>
                                <span> د پاڼې شمیره / شامره صفحه:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$rel->pageNo}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>د پلار نوم / ولد:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$rel->fathername}}</span>
                            </td>
                            <td>
                                <span>د ثبت ګڼه / شامره ثبت:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetch"> {{$rel->identityNo}}</span>
                            </td>
                            
                        </tr>
                       
                        @endforeach
                   </tbody>
                  
                </table>
             </div>
             <div class="certify">
                <table class="table-bordered maintabl" dir="rtl">
                    <tbody>
            <tr>
                <td width="80%" style="height: 6rem;">
                <ul>
                    <li>زه چې شهرت مې پورته ذکر شوی د ټولو ورکړل شویو معلوماتو مسئول او ځواب ورکونکی یم./اینجانب که شهرت ام در فوق ذکر است، از ارائه معلومات داده شده 
                        خویش مسئول و جوابگو می باشم:</li>
                        <li>
                            <span class="sign">
                                نشان انګشت / امضاء متقاضی</span>
                        </li>
                        <li>
                            <span class="stamp">محل مهر و امضاء </span>
                        </li>
                </ul>
                </td>
            </tr>
           
        </tbody>
         </table>
            </div>
        
        </div>
      <div class="footer">
        <span>Nördliche Münchner Straße 12, 82031 Grünwald</span><br>
        <span>Tel:+49 89 255523030 / Web:munich.mfa.af / Email:info.munich@mfa.af</span>

      </div>
        
    </div>

    <div id="form Backside" class="div-mainform div-form" style="margin-right:auto; margin-left:auto;">
        <div class="row">
            <table class="tableM">
                <thead>
                    <tr>
                        <td>
                            <div class="mainlogo">
                                <img src="../images/afghanistanlogo.jpg" width="90" alt="">
                            </div>
                        </td>
                    </tr>
                    @foreach($candidateInfo as $cand)
                    <tr>
                        <td>
                            <div class="rowM">
                                <div class="MLeftLogoSection">
                                    <h3> جنرال کنسلگری</h3>
                                    <h3>جمهوری اسلامی افغانستان </h3>
                                    <h4 style="color:#e0c07e"> مونشن - آلمان</h4>
                                </div>
        
                                <div class="MRightLogoSection">
                                    <h3>د افغانستان اسلامی جمهوریت </h3>
                                    <h3>جنرال کنسلگری</h3>
                                    <h4 style="color:#e0c07e"> مونشن - آلمان</h4>
                                </div>
                                <div class="MMiddleTextSection">
                                    <h3>General Consultant of</h3>
                                    <h3>ISLAMIC REPUBLIC of AFGHANISTAN</h3>
                                    <h4 style="color:#e0c07e">Munich - Germany</h4><br>
                                    <h4 id="IDTitleText">Bestätigung der Afghanischen Identität</h4>
                                </div>
                            </div>
                            <div class="MNumberSectionback">
                                <h3>Nr:<span>{{$cand->code}}</span></h3>
                            </div>
                            <div class="MDateSectionback">
                                <h3>Datum: <span> {{$cand->created_at}}</span></h3>
                            </div>
                      </td>                   
                     </tr>
                     @endforeach
                </thead>

            </table>
           
            <div class="candidatedetalback">
               
                <table width="100%" class="table-bordered maintabl"dir="ltr" >
                 
                    <tbody style="direction:ltr">
                        <tr id="titletr">
                            <th></th>
                            <th scope="row" id="tableTitle" colspan="2" width="80%">1. Angaben zur Person</th>
                           
                    </tr>
                    @foreach($candidateInfo as $cand)
                        <tr>
                            <td>
                                <span>Familienname:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback"> {{$cand->lastnameEn}}</span>
                            </td>
                            
                        </tr>
                        <tr >
                            <td>
                                <span>Vorname: </span>
                            </td>
                            <td>
                                <span id="datafetchback"> {{$cand->firstnameEn}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Vatername:</span>
                            </td>
                            <td>
                                <span id="datafetchback"> {{$cand->fathernameEn}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Großvatername:</span>
                            </td>
                            <td>
                                <span id="datafetchback"> {{$cand->grandfathernameEn}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Geburtsort:</span>
                            </td>
                            <td>
                                <span id="datafetchback"> {{$cand->placeofbirthID == 32 ? $cand->outsideEn : $cand->placeofbirthEn}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Geburtsdatum: </span>
                            </td>
                            <td>
                                <span id="datafetchback">{{$cand->dateofbirth}} </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Familienstand:</span>
                            </td>
                            <td>
                                <span id="datafetchback">{{$cand->maritalstatusEn}} </span>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
             <div class="candidateAddressback" >
                <table width="100%" class="table-bordered maintabl" dir="ltr">
                    <thead>
                        <tr id="titletr">
                            <th scope="row" id="tableTitle" colspan="2" width="60%">3. Wohnsitz in Afghanistan:</th>
                           
                        </tr>
                    </thead>
                    @foreach($candidateExtraDetails as $adr)
                   <tbody>

                       <tr>
                            <td>
                                <span>Ort:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$adr->vlEn}} </span>
                            </td>
                       </tr>
                       <tr>
                            <td>
                                <span >Bezirk: </span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$adr->distEn}} </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Stadt/Provinz:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$adr->provnameEn}}</span>
                            </td>
                            
                        </tr>
                        <tr id="titletr">
                            <th   width="20%"></th>
                            <th scope="row" id="tableTitle" colspan="2" width="80%" style="font-size: 15px !important;width:20%"
                            > 4. Aktueller Wohnsitz: </th>
                            
                        </tr>
                        <tr>
                            <td>
                                <span>Zuwanderungsdatum:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$adr->imigratingDate}}</span>
                            </td>
                       </tr>
                        <tr>
                            <td>
                                <span>Hausnummer:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$adr->houseNo}}</span>
                            </td>
                       </tr>
                       <tr>
                            <td>
                                <span >Straße: </span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$adr->streetNo}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>PLZ/Ort:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$adr->city}}</span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <span>Land</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$adr->cntrynameEn}}</span>
                            </td>
                            
                        </tr>
                        <tr id="titletr">
                            <th scope="row" id="tableTitle" colspan="2" width="60%" style="font-size: 15px !important">6. Beschäftigung: </th>
                           
                        </tr>
                        <tr>
                            <td>
                                <span>Beschäftigung in Afghanistan:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$adr->jobinAfgEn}}</span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <span>Beschäftigung im Ausland:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$adr->jobinforgnEn}}</span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <span>Handynummer:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$adr->jobphone}}</span>
                            </td>
                            
                        </tr>
                        @endforeach
                   </tbody>
                </table>
             </div>
             <div class="candidatespecificationsback">
                <table width="100%" class="table-bordered maintabl" dir="ltr">
                    <thead>
                        <tr id="titletr">
                            <th id="tableTitle" colspan="2" width="60%"style="font-size: 14px !important"> 2. Persönliche Merkmale:</th>
                            
                    </tr>
                    </thead>
                    @foreach($candidateInfo as $cands)
                   <tbody>
                       <tr>
                            <td>
                                <span>Größe: </span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$cands->hight}}</span>
                            </td>
                       </tr>
                       <tr>
                            <td>
                                <span>Augenfarbe:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$cands->eyecolorEn}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Hautfarbe:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$cands->skincolorEn}}</span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <span>Haarfarbe: </span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$cands->haircolorEn}}</span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <span>Sonstige Zeichen:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$cands->otherIdentEn}}</span>
                            </td>
                            
                        </tr>
                        @endforeach
                        <tr id="titletr">
                            <th scope="row" id="tableTitle" colspan="2" width="60%" style="font-size: 14px !important">5. Begründung für den nicht Besitz der Tazkira: </th>
                            
                        </tr>
                        @foreach($candidateExtraDetails as $ident)
                        <tr>
                            <td>
                                <span style="font-size:12px !important; font-weight:900;">Geburt im Ausland:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$ident->birthinforgn == 1 ?'Ja':'Nein'}}</span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <span> Nicht beantragt:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$ident->nothavingID == 1 ?'Ja':'Nein'}}</span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <span>Verloren:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$ident->lostID == 1 ?'Ja':'Nein'}}</span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <span>Verbrannt:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$ident->burntID == 1 ?'Ja':'Nein'}}</span>
                            </td>
                            
                        </tr>
                        <tr id="titletr">
                            <th colspan="1"  width="20%"></th>
                            <th scope="row" id="tableTitleback" colspan="1" 
                            width="60%" style="font-size: 13px !important; width:100%">7. Was für ein Dokument wurde vorgelegt:</th>
                           
                        </tr>
                        <tr>
                            <td>
                                <span>Ausweis/Führerschein:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$ident->dirverliscens == 1 ?'Ja':'Nein'}}</span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <span> Pass/ 
                                    Aufenthaltsausweis:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$ident->currnameEn}}</span>
                            </td>
                            
                        </tr>
                        @endforeach
                   </tbody>
                </table>
             </div>
             <div class="candidaterelativesback">
                <table width="100%" class="table-bordered maintabl" dir="rtl">
                    <thead>
                        <tr id="titletr">
                            <th scope="row" id="tableTitle" colspan="2" width="80%">8. Angaben zu Angehörigen </th>
                         
                        </tr>
                    </thead>
                </table>
             </div>
                <div class="relativedetailsback">
                <table class="table-bordered maintabl" dir="ltr">
             
                   <tbody>
                    @foreach($candidateExtraDetails as $rel)
                       <tr>
                            <td>
                                <span>Verwandschaft</span>
                            </td>
                            <td id="dataload" colspan="2" width="30%">
                                <span id="datafetchback2"> {{$rel->relativetypenameEn == null ? 'No':$rel->relativetypenameEn}}</span>
                            </td>
                            <td>
                                <span>Buchnummer:</span>
                            </td>
                            <td id="dataload" colspan="2" width="30%">
                                <span id="datafetchback2"> {{$rel->juldNo}}</span>
                            </td>
                       </tr>
                       <tr>
                            <td>
                                <span>Name:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$rel->firstnameEn}}</span>
                            </td>
                            <td>
                                <span>Seitennummer:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$rel->pageNo}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Vatername:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$rel->fathernameEn}}</span>
                            </td>
                            <td>
                                <span>Registernummer:</span>
                            </td>
                            <td id="dataload" colspan="2">
                                <span id="datafetchback2"> {{$rel->identityNo}}</span>
                            </td>
                            
                        </tr>
                       
                        @endforeach
                   </tbody>
                  
                </table>
             </div>
             <div class="certifyback">
                <table class="table-bordered maintabl" dir="ltr">
                    <tbody>
            <tr>
                <td width="80%" style="height: 6rem;">
                <ul>
                    <li>Hiermit bestätige ich, dass die genannten Angaben richtig sind und ich selbst dafür verantwortlich bin.</li>
                        
                        <li>
                            <span class="stampback">Stempel / Unterschrift</span>
                        </li>
                </ul>
                </td>
            </tr>
           
        </tbody>
         </table>
            </div>
        
        </div>
      <div class="footer">
        <span>Nördliche Münchner Straße 12, 82031 Grünwald</span><br>
        <span>Tel:+49 89 255523030 / Web:munich.mfa.af / Email:info.munich@mfa.af</span>

      </div>
        
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            var Code = $('#code_print').val();
            var HajjAbb = "IDMIS";
            JsBarcode("#barcode1", HajjAbb + "" + Code);
           
        });
    </script>
</body>
</html>