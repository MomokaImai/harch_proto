<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日本地図</title>
    <link rel="stylesheet" href="../css/map.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/jquery.rwdImageMaps.min.js" type="text/javascript"></script>
    <script>
        $(function(){
            $('img[usemap]').rwdImageMaps();
        });
        // window.onload = function() {
        //     window.location.hash = "map"
        //     }
        // };
    </script>
</head>
<style>
    /* .map_img {background-color: #f0fff0;} */

    img {
    max-width: 100%;
    vertical-align: bottom;
    }

    li {
        list-style: none;
    }

    .popup_hokkaido {
        position: relative;
        display: inline-block;
        margin: 1.5em 0;
        padding: 7px 10px;
        min-width: 120px;
        max-width: 100%;
        color: #555;
        font-size: 8px;
        background: #e0edff;
        border-radius: 15px;
    }

    .popup_hokkaido:before {
        content: "";
        position: absolute;
        top: -28px;
        left: 50%;
        margin-left: -15px;
        border: 15px solid transparent;
        border-bottom: 15px solid #e0edff;
    }

    .popup_hokkaido ul {
        margin: 0;
        padding: 0;
        text-align:center;
    }

    .popup_tohoku {
        position: relative;
        display: inline-block;
        margin: 1.5em 0;
        padding: 7px 10px;
        min-width: 120px;
        max-width: 100%;
        color: #555;
        font-size: 8px;
        background: #e0edff;
        border-radius: 15px;
    }

    .popup_tohoku:before {
        content: "";
        position: absolute;
        top: -28px;
        left: 50%;
        margin-left: -15px;
        border: 15px solid transparent;
        border-bottom: 15px solid #e0edff;
    }

    .popup_tohoku ul {
        margin: 0;
        padding: 0;
        text-align:center;
    }

    .popup_kanto {
        position: relative;
        display: inline-block;
        margin: 1.5em 0;
        padding: 7px 10px;
        min-width: 120px;
        max-width: 100%;
        color: #555;
        font-size: 8px;
        background: #e0edff;
        border-radius: 15px;
    }

    .popup_kanto:before {
        content: "";
        position: absolute;
        top: -28px;
        left: 50%;
        margin-left: -15px;
        border: 15px solid transparent;
        border-bottom: 15px solid #e0edff;
    }

    .popup_kanto ul {
        margin: 0;
        padding: 0;
        text-align:center;
    }

    .popup_tyubu {
        position: relative;
        display: inline-block;
        margin: 1.5em 0;
        padding: 7px 10px;
        min-width: 120px;
        max-width: 100%;
        color: #555;
        font-size: 8px;
        background: #e0edff;
        border-radius: 15px;
    }

    .popup_tyubu:before {
        content: "";
        position: absolute;
        top: -28px;
        left: 50%;
        margin-left: -15px;
        border: 15px solid transparent;
        border-bottom: 15px solid #e0edff;
    }

    .popup_tyubu ul {
        margin: 0;
        padding: 0;
        text-align:center;
    }

    .popup_kinki {
        position: relative;
        display: inline-block;
        margin: 1.5em 0;
        padding: 7px 10px;
        min-width: 120px;
        max-width: 100%;
        color: #555;
        font-size: 8px;
        background: #e0edff;
        border-radius: 15px;
    }

    .popup_kinki:before {
        content: "";
        position: absolute;
        top: -28px;
        left: 50%;
        margin-left: -15px;
        border: 15px solid transparent;
        border-bottom: 15px solid #e0edff;
    }

    .popup_kinki ul {
        margin: 0;
        padding: 0;
        text-align:center;
    }

    .popup_tyugoku {
        position: relative;
        display: inline-block;
        margin: 1.5em 0;
        padding: 7px 10px;
        min-width: 120px;
        max-width: 100%;
        color: #555;
        font-size: 8px;
        background: #e0edff;
        border-radius: 15px;
    }

    .popup_tyugoku:before {
        content: "";
        position: absolute;
        top: -28px;
        left: 50%;
        margin-left: -15px;
        border: 15px solid transparent;
        border-bottom: 15px solid #e0edff;
    }

    .popup_tyugoku ul {
        margin: 0;
        padding: 0;
        text-align:center;
    }

    .popup_shikoku {
        position: relative;
        display: inline-block;
        margin: 1.5em 0;
        padding: 7px 10px;
        min-width: 120px;
        max-width: 100%;
        color: #555;
        font-size: 8px;
        background: #e0edff;
        border-radius: 15px;
    }

    .popup_shikoku:before {
        content: "";
        position: absolute;
        top: -28px;
        left: 50%;
        margin-left: -15px;
        border: 15px solid transparent;
        border-bottom: 15px solid #e0edff;
    }

    .popup_shikoku ul {
        margin: 0;
        padding: 0;
        text-align:center;
    }

    .popup_kyusyu {
        position: relative;
        display: inline-block;
        margin: 1.5em 0;
        padding: 7px 10px;
        min-width: 120px;
        max-width: 100%;
        color: #555;
        font-size: 8px;
        background: #e0edff;
        border-radius: 15px;
    }

    .popup_kyusyu:before {
        content: "";
        position: absolute;
        top: -28px;
        left: 50%;
        margin-left: -15px;
        border: 15px solid transparent;
        border-bottom: 15px solid #e0edff;
    }

    .popup_kyusyu ul {
        margin: 0;
        padding: 0;
        text-align:center;
    }


    .popup_okinawa {
        position: relative;
        display: inline-block;
        margin: 1.5em 0;
        padding: 7px 10px;
        min-width: 120px;
        max-width: 100%;
        color: #555;
        font-size: 8px;
        background: #e0edff;
        border-radius: 15px;
    }

    .popup_okinawa:before {
        content: "";
        position: absolute;
        top: -28px;
        left: 50%;
        margin-left: -15px;
        border: 15px solid transparent;
        border-bottom: 15px solid #e0edff;
    }

    .popup_okinawa ul {
        margin: 0;
        padding: 0;
        text-align:center;
    }
    
    .yokonarabi {
        overflow: hidden;
    }

    .yoko_img {
        float:left;
        padding:20px 3px;
        text-align:center;
    }
</style>
<body>
<form method="POST" action="harch2.php">
    <div class="map_img">
        <img src="map/NEWJapan.png" usemap="#ImageMap" alt="" />
        <map name="ImageMap">

        <div class="hokkaido">
            <label for="l-1">
            <span class="click_hokkaido">
                <area shape="poly" coords="712,69,712,68,716,61,718,60,724,55,750,82,767,99,792,113,795,118,802,118,807,114,806,120,812,117,818,122,833,124,852,104,852,104,844,127,846,134,850,139,853,147,851,148,854,152,862,153,870,146,864,155,858,156,852,156,845,165,841,161,837,162,834,167,826,169,819,166,812,169,792,186,782,204,784,217,760,204,733,193,722,188,720,185,697,203,693,199,683,189,678,191,676,191,668,199,668,208,675,211,679,215,687,215,693,222,702,226,695,231,682,226,681,231,674,235,674,240,667,247,663,246,661,237,665,230,665,224,664,221,660,213,657,213,655,210,651,208,651,204,654,199,652,193,654,190,665,183,668,185,678,172,671,161,675,157,687,163,693,161,701,166,711,158,707,138,718,129,718,123,717,113,721,106,723,98,722,93,720,83,713,68,732,92" alt="" />
                <area shape="rect" coords="548,79,654,136" alt="" />
            </span>
            </label>
            <input type="checkbox" id="l-1" name="area[]" value="北海道"><div class="dsp">
            <div class="popup_hokkaido">
                <div class="yokonarabi">
                    <div class="yoko_img">
                        <img src="map/image/regionHokkaido.png" alt="北海道地方" width="300" height="65">
                    </div>

                    <div class="yoko_img">
                        <p class="close_btn">
                            <a href="harch2.php" onclick="window.close()">
                                <img src="map/image/close.png" alt="閉じる" width="35" height="50">
                            </a>
                        </p>
                    </div>
                </div>
                <ul>
                    <li>
                        <a href="comingsoon.php">
                            <img src="map/image/Hokkaido.jpg" alt="北海道pic" width="282" height="256">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="tohoku">
            <label for="l-2">
            <span class="click_tohoku">
                <area shape="poly" coords="691,263,697,240,711,251,719,247,720,249,720,256,719,270,717,280,712,285,714,287,717,284,718,284,722,296,725,298,729,302,729,305,736,313,734,319,738,321,737,324,743,330,743,336,744,337,743,348,742,349,745,350,744,359,742,366,740,367,741,372,741,373,740,375,739,379,737,387,734,386,732,387,730,386,729,391,730,391,729,394,724,399,723,404,723,408,720,413,725,414,723,416,723,419,702,424,703,427,699,438,697,450,703,461,703,489,700,497,702,501,691,510,684,504,676,511,669,505,667,498,660,493,657,494,652,492,632,505,626,505,625,500,624,493,625,489,622,487,625,481,624,478,624,476,629,476,633,472,640,471,640,468,638,466,638,465,646,455,642,448,643,445,644,434,652,430,653,426,644,419,643,412,640,412,650,393,651,384,654,372,660,363,660,350,660,340,656,334,651,337,648,336,648,332,652,332,661,315,657,303,657,297,653,294,663,286,664,288,671,284,673,274,676,271,672,266,672,263,674,259,676,261,680,260,682,258,684,261,687,263,689,280,694,276,696,271,701,274,704,279,707,277,710,269,712,262,710,258,709,256,703,261,698,261,695,261,693,262,692,263,693,263,705,257" alt="" />
                <area shape="rect" coords="765,424,872,479" alt="" />
            </span>
            </label>
            <input type="checkbox" id="l-2" name="area[]"><div class="dsp">
            <!-- <p>ここの要素が出てきます。2</p> -->
            <div class="popup_tohoku">
                <div class="yokonarabi">
                    <div class="yoko_img">
                        <img src="map/image/regionTohoku.png" alt="東北地方" width="300" height="65">
                    </div>

                    <div class="yoko_img">
                        <p class="close_btn">
                            <a href="harch2.php" onclick="window.close()">
                                <img src="map/image/close.png" alt="閉じる">
                            </a>
                        </p>
                    </div>
                </div>
                <ul>
                    <li>
                        <a href="comingsoon.php">
                            <img src="map/image/Aomori.jpg" alt="青森県pic" width="200" height="150">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Akita.jpg" alt="秋田県pic" width="200" height="150">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Iwate.jpg" alt="岩手県pic" width="200" height="150">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Yamagata.jpg" alt="山形県pic" width="200" height="150">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Miyagi.jpg" alt="宮城県pic" width="200" height="150">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Fukushima.jpg" alt="福島県pic" width="200" height="150">
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="kanto">
            <label for="l-3">
            <span class="click_kanto">
                <area shape="poly" coords="632,507,651,494,658,495,668,499,669,504,677,512,683,507,684,505,691,509,686,526,685,534,685,550,694,565,696,572,690,573,680,581,677,590,677,601,668,605,655,616,650,614,652,611,651,609,652,606,651,602,653,597,650,594,653,592,664,582,663,579,659,575,655,578,650,578,648,579,646,580,649,583,646,586,644,586,642,595,646,598,645,603,642,603,643,599,635,593,630,596,625,596,622,599,621,602,621,604,616,602,614,597,613,592,619,584,619,578,614,570,611,566,603,564,601,560,597,555,597,550,597,544,597,541,599,536,591,536,586,529,590,524,595,517,600,517,601,514,612,511,615,505,619,502,625,507,632,508,634,504,644,516" alt="" />
                <area shape="rect" coords="724,549,831,599" alt="" />
            </span>
            </label>
            <input type="checkbox" id="l-3" name="area[]"><div class="dsp">
            <!-- <p>ここの要素が出てきます。3</p> -->
            <div class="popup_kanto">
                <div class="yokonarabi">
                    <div class="yoko_img">
                        <img src="map/image/regionKanto.png" alt="関東地方">
                    </div>
                
                    <div class="yoko_img">
                        <p class="close_btn">
                            <a href="harch2.php" onclick="window.close()">
                                <img src="map/image/close.png" alt="閉じる">
                            </a>
                        </p>
                    </div>
                </div>
                <ul>
                    <li>
                        <a href="comingsoon.php">
                            <img src="map/image/Ibaraki.jpg" alt="茨城県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Totigi.jpg" alt="栃木県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Gunma.jpg" alt="群馬県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Saitama.jpg" alt="埼玉県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Chiba.jpg" alt="千葉県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Tokyo.jpg" alt="東京都pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Kanagawa.jpg" alt="神奈川県pic">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        
        <div class="tyuubu">
            <label for="l-4">
            <span class="click_tyuubu">
                <area shape="poly" coords="637,412,640,414,643,416,644,420,651,426,650,430,643,433,640,448,645,454,636,464,638,471,632,471,629,475,622,474,622,480,624,481,619,486,624,490,622,493,626,497,624,504,620,503,617,500,612,504,611,507,608,511,601,513,599,511,596,515,592,517,590,520,586,524,587,533,590,535,595,538,594,541,595,545,594,551,596,557,599,559,607,564,615,575,614,587,610,592,611,599,618,605,617,612,621,618,619,624,615,628,614,631,607,638,601,632,603,626,603,623,603,617,608,613,602,609,600,607,596,610,590,614,591,616,586,619,584,626,577,634,577,636,574,637,563,632,551,633,551,629,550,626,545,628,545,633,523,638,524,634,524,633,528,636,534,630,537,633,539,631,535,624,531,626,530,628,521,625,519,624,517,626,519,629,519,631,514,628,516,624,514,622,514,616,516,613,515,611,513,612,508,604,497,602,499,594,500,592,497,585,495,581,493,577,493,574,489,575,486,574,484,576,484,580,481,584,477,586,475,583,472,584,472,589,468,590,466,592,464,593,459,592,454,590,452,585,453,583,464,586,470,580,472,578,476,575,477,572,479,573,480,576,482,573,482,569,479,567,475,558,478,554,479,551,484,546,484,541,490,542,493,536,503,526,513,511,514,508,512,504,514,504,511,494,509,490,514,481,514,480,535,470,539,473,540,475,536,475,524,488,521,486,518,493,519,496,524,496,523,508,533,516,544,510,542,505,554,501,563,497,572,491,580,491,595,478,598,472,603,466,604,459,608,453,626,442,632,426,637,414,623,469" alt="" />
                <area shape="rect" coords="483,387,593,451" alt="" />
            </span>
            </label>
            <input type="checkbox" id="l-4" name="area[]"><div class="dsp">
            <!-- <p>ここの要素が出てきます。4</p> -->
            <div class="popup_tyubu">
                <div class="yokonarabi">
                    <div class="yoko_img">
                        <img src="map/image/regionChubu.png" alt="中部地方">
                    </div>
 
                    <div class="yoko_img">
                        <p class="close_btn">
                            <a href="harch2.php" onclick="window.close()">
                                <img src="map/image/close.png" alt="閉じる">
                            </a>
                        </p>
                    </div>
                </div>
                <ul>
                    <li>
                        <a href="comingsoon.php">
                            <img src="map/image/Niigata.jpg" alt="新潟県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Toyama.jpg" alt="富山県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Ishikawa.jpg" alt="石川県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Nagano.jpg" alt="長野県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Gifu.jpg" alt="岐阜県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Yamagata.jpg" alt="山形県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Shizuoka.jpg" alt="静岡県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Aichi.jpg" alt="愛知県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Fukui.jpg" alt="福井県pic">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="kinki">
            <label for="l-5">
            <span class="click_kinki">
                <area shape="poly" coords="399,628,398,625,394,621,398,617,396,612,404,605,403,599,408,598,410,593,402,578,425,577,442,572,447,577,441,582,444,584,449,588,450,586,453,581,455,590,463,595,465,595,471,591,476,585,480,587,485,584,487,581,486,576,490,576,494,578,498,585,501,592,501,596,499,598,500,603,509,604,511,612,515,614,511,618,506,631,503,638,513,643,518,646,522,650,521,653,521,659,518,657,515,658,515,653,507,657,505,660,494,661,489,669,490,675,486,678,478,685,477,692,474,695,475,699,465,704,450,700,447,692,446,688,440,685,434,678,436,672,435,669,441,664,433,656,446,650,452,639,448,631,433,636,418,626,415,628,409,628,404,626,404,628,430,638,430,643,426,650,428,655,425,659,417,662,415,656,418,649,426,643,430,640,431,639,431,639" alt="" />
                <area shape="rect" coords="494,681,603,736" alt="" />
            </span>
            </label>
            <input type="checkbox" id="l-5" name="area[]"><div class="dsp">
            <!-- <p>ここの要素が出てきます。5</p> -->
            <div class="popup_kinki">
                <div class="yokonarabi">
                    <div class="yoko_img">
                        <img src="map/image/regionkinki.png" alt="近畿地方">
                    </div>

                    <div class="yoko_img">
                        <p class="close_btn">
                            <a href="harch2.php" onclick="window.close()">
                                <img src="map/image/close.png" alt="閉じる">
                            </a>
                        </p>
                    </div>
                </div>
                <ul>
                    <li>
                        <a href="comingsoon.php">
                            <img src="map/image/Shiga.jpg" alt="滋賀県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Mie.jpg" alt="三重県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Kyoto.jpg" alt="京都府pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Osaka.jpg" alt="大阪府pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Hyogo.jpg" alt="兵庫県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Nara.jpg" alt="奈良県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Wakayama.jpg" alt="和歌山県pic">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="tyugoku">
            <label for="l-6">
            <span class="click_tyugoku">
                <area shape="poly" coords="222,633,226,635,229,634,232,639,238,638,239,638,244,636,243,634,254,625,258,625,261,623,265,622,272,619,310,591,314,585,313,582,317,581,330,578,334,574,339,578,338,583,341,585,346,584,348,581,350,582,353,585,362,579,368,582,373,582,378,581,393,582,402,578,408,594,403,598,404,603,397,610,396,615,393,621,398,624,397,628,393,627,392,629,386,635,381,633,378,634,382,637,378,640,375,642,370,641,368,643,362,637,360,637,356,640,352,637,350,639,348,642,346,646,340,642,336,642,332,642,329,645,323,648,319,647,315,647,314,650,312,652,308,653,300,649,300,645,300,644,296,642,295,642,291,646,285,650,286,653,286,657,283,663,282,666,279,667,278,671,274,667,269,666,265,662,263,661,261,659,255,661,249,662,245,660,240,661,239,664,232,664,228,661,229,659,224,656,220,658,215,662,215,656,214,651,218,648,217,644,215,641,217,640,222,639,222,637,220,637,220,635,223,635,227,637" alt="" />
                <area shape="rect" coords="256,496,364,551" alt="" />
            </span>
            </label>
            <input type="checkbox" id="l-6" name="area[]"><div class="dsp">
            <!-- <p>ここの要素が出てきます。6</p> -->
            <div class="popup_tyugoku">
                <div class="yokonarabi">
                    <div class="yoko_img">
                        <img src="map/image/regionCyugoku.png" alt="中国地方">
                    </div>
                
                    <div class="yoko_img">
                        <p class="close_btn">
                            <a href="harch2.php" onclick="window.close()">
                                <img src="map/image/close.png" alt="閉じる">
                            </a>
                        </p>
                    </div>
                </div>
                <ul>
                    <li>
                        <a href="comingsoon.php">
                            <img src="map/image/Tottori.jpg" alt="鳥取県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Shimane.jpg" alt="島根県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Okayama.jpg" alt="岡山県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Hiroshima.jpg" alt="広島県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Yamaguti.jpg" alt="山口県pic">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="shikoku">
            <label for="l-7">
            <span class="click_shikoku">
                <area shape="poly" coords="313,665,323,678,334,674,341,674,346,676,354,661,358,660,370,651,377,653,381,651,382,656,386,653,388,656,390,660,397,664,402,663,408,666,407,673,409,680,410,683,410,688,410,690,399,694,389,705,381,721,372,712,371,709,360,704,348,705,346,703,346,706,330,713,330,717,331,720,328,725,322,729,318,735,313,734,313,745,313,748,298,746,296,747,294,745,300,741,296,738,294,737,290,736,289,734,286,729,291,718,288,713,284,713,282,709,285,705,282,704,280,704,280,702,284,699,290,696,292,695,299,692,299,689,301,683,305,674,306,671,314,670,314,669,315,680" alt="" />
                <area shape="rect" coords="326,754,434,809" alt="" />
            </span>
            </label>
            <input type="checkbox" id="l-7" name="area[]"><div class="dsp">
            <!-- <p>ここの要素が出てきます。7</p> -->
            <div class="popup_shikoku">
                <div class="yokonarabi">
                    <div class="yoko_img">
                        <img src="map/image/regionSikoku.png" alt="四国地方">
                    </div>
                
                    <div class="yoko_img">
                        <p class="close_btn">
                            <a href="harch2.php" onclick="window.close()">
                                <img src="map/image/close.png" alt="閉じる">
                            </a>
                        </p>
                    </div>
                </div>
                <ul>
                    <li>
                        <a href="comingsoon.php">
                            <img src="map/image/Kagawa.jpg" alt="香川県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Ehime.jpg" alt="愛媛県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Tokushima.jpg" alt="徳島県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Kouti.jpg" alt="高知県pic">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="kyusyu">
            <label for="l-8">
            <span class="click_kyusyu">
                <area shape="poly" coords="145,692,149,687,151,692,156,692,156,696,159,690,156,687,156,684,160,685,162,683,165,685,170,687,173,684,173,679,178,677,180,681,186,682,188,677,192,667,197,668,204,663,206,665,206,669,208,667,211,667,218,665,215,670,216,676,218,680,217,684,221,684,238,686,242,681,251,686,251,693,246,697,242,699,240,699,243,703,246,703,257,704,255,708,255,710,259,716,260,719,262,723,261,726,257,726,257,727,253,733,246,738,245,742,242,747,234,766,231,776,232,781,231,784,225,790,225,796,223,799,213,795,210,795,208,797,212,799,211,803,201,810,207,828,207,834,201,846,197,847,182,852,177,853,172,847,176,843,179,841,188,812,196,803,196,797,191,791,198,786,197,781,192,778,187,781,183,789,186,797,187,800,189,802,185,807,181,804,176,800,169,802,166,794,163,792,168,791,172,786,174,781,167,773,170,766,168,760,168,755,164,751,163,750,161,739,165,734,171,730,169,728,172,723,166,721,160,725,158,730,155,728,154,725,152,718,148,716,106,723,101,726,97,727,97,719,98,717,117,708,137,695,151,668,128,649,130,642,135,633,137,628,140,623,147,621,145,626,147,628,142,632,137,637,137,644,135,648,155,665,158,671,154,664" alt="" />
                <area shape="rect" coords="33,761,139,825" alt="" />
            </span>
            </label>
            <input type="checkbox" id="l-8" name="area[]"><div class="dsp">
            <!-- <p>ここの要素が出てきます。8</p> -->
            <div class="popup_kyusyu">
                <div class="yokonarabi">
                    <div class="yoko_img">
                        <img src="map/image/regionKyushu.png" alt="九州地方">
                    </div>
                
                    <div class="yoko_img">
                        <p class="close_btn">
                            <a href="harch2.php" onclick="window.close()">
                                <img src="map/image/close.png" alt="閉じる">
                            </a>
                        </p>
                    </div>
                </div>
                <ul>
                    <li>
                        <a href="comingsoon.php">
                            <img src="map/image/Fukuoka.jpg" alt="福岡県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Saga.jpg" alt="佐賀県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Nagasaki.jpg" alt="長崎県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Oita.jpg" alt="大分県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Kumamoto.jpg" alt="熊本県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Miyazaki.jpg" alt="宮崎県pic">
                        </a>
                        <a href="comingsoon.php">
                            <img src="map/image/Kagoshima.jpg" alt="鹿児島県pic">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="okinawa">
            <label for="l-9">
            <span class="click_okinawa">
                <area shape="poly" coords="797,719,821,738,827,746,824,756,821,760,811,761,812,765,805,770,797,770,789,777,794,784,792,789,786,791,783,788,776,793,774,799,776,802,781,800,777,804,766,809,760,812,762,801,734,804,678,792,670,784,676,783,721,764,774,750,776,752,789,731,790,723,795,720,796,719,801,731" alt="" />
                <area shape="rect" coords="851,773,957,832" alt="" />
            </span>
            </label>
            <input type="checkbox" id="l-9" name="area[]"><div class="dsp">
            <!-- <p>ここの要素が出てきます。9</p> -->
            <div class="popup_okinawa">
                <div class="yokonarabi">
                    <div class="yoko_img">
                        <img src="map/image/regionOkinawa.png" alt="沖縄地方">
                    </div>

                    <div class="yoko_img">
                        <p class="close_btn">
                            <a href="harch2.php" onclick="window.close()">
                                <img src="map/image/close.png" alt="閉じる">
                            </a>
                        </p>
                    </div>
                </div>
                <ul>
                    <li>
                        <a href="comingsoon.php">
                            <img src="map/image/Okinawa.jpg" alt="沖縄県pic">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        </map>
    </div>
</form>

</body>
</html>

