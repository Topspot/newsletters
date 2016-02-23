<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">        
    </head>

    <body style="background: url(http://speakeasymarketinginc.com/client-nl-images/bg_dec.jpg) repeat;">
        <div style=" margin: 0 auto; width: 600px;">
            <div style="background: #fff; border-radius: 5px;">
                <div style="border-top: 9px solid #333333; border-radius: 5px 5px 0 0;"></div>
                <div style="background: #fff; padding: 15px 0;"><a target="_blank" href="{!! $attorney->website !!}"><img style="display: block; margin: 0 auto;" src="{!! url('/').'/uploads/files/'.$attorney->logo !!}"></a></div>
                <div style="background: #727272; padding: 5px 0;text-align: center;  "><a style="color: #fff; font-family: Arial; font-size: 18px; margin: 0; line-height: 25px; text-align: center;">{!! $attorney->phone !!}</a></div>
                <div style=" background: #333333; border-radius: 0 0 5px 5px; overflow: hidden; padding: 5px 15px;"><p style="float: left; color: #fff; font-family: Arial; font-size: 14px; margin: 0; line-height: 25px"><?php echo date('F Y'); ?> Newsletter</p> <p style="float: right; color: #fff; font-family: Arial; font-size: 14px; margin: 0; line-height: 25px">{!! $attorney->volume !!}</p></div>
            </div>

                <?php
//                print_r($attorney->check_banner);exit();
    if($attorney->check_banner == 'list'){
    ?>
            <div style="background: url(<?php echo url('/').'/uploads/files/'.$attorney->banner_background; ?>) no-repeat center top; margin: 2px 0 0; padding: 32px 15px; overflow: hidden;    border-radius: 0px;">
                <div style="float: left; width: 390px;">
                    <p style="color: #ffbf00; font-family: Arial; font-size: 22px; font-weight: bold; margin: 0;">{!! $attorney->banner_heading !!}</p>
                    <?php $bannertext = json_decode($attorney->banner_text); ?>
                    <ul style="margin: 0; padding: 0;">
                        <?php
                        if (isset($bannertext)) {
                            foreach($bannertext as $value){
                                ?>
                                <li style=" background: url(http://speakeasymarketinginc.com/client-nl-images/dotted_dec.png) no-repeat left 5px; color: #fff; font-family: Arial; font-size: 15px; margin: 10px 0 0; list-style: none; padding-left: 20px;">{!! $value !!}</li>
                          <?php   } ?>
                    <?php } ?>
                    </ul>
                </div>
                <div style="float: right; width: 141px;"><a target="_blank" href="{!! $attorney->website !!}"><img src="{!! url('/').'/uploads/files/'.$attorney->attorney_img !!}"></a></div>
            </div>
    <?php }else{ ?>
           <div style="background: url(<?php echo url('/').'/uploads/files/'.$attorney->banner_background; ?>) no-repeat center top; margin: 2px 0 0; padding: 5px 15px 0; overflow: hidden;">
                <div style="float: none; width: 100%;">
                    <p style="color: #ffbf00; font-family: Arial; font-size: 20px; font-weight: bold; margin: 0;">{!! $attorney->banner_heading !!}</p>
                    <p style="color: #fff; font-family: Arial; font-size: 15px; margin: 10px 0 0; list-style: none;padding-left: 5px;line-height: 18px;">
                        <a target="_blank" style="float: right; margin: 0 0 0 10px;" href="{!! $attorney->website !!}" ><img src="{!! url('/').'/uploads/files/'.$attorney->attorney_img !!}"></a>
                         <?php $bannertext = json_decode($attorney->banner_text); 
                        if (isset($bannertext)) {                            
                            ?>
                        {!! $bannertext[0] !!}
                         <?php }  ?>
                        <div style="clear: both;"></div>
                    </p>
                    <div style="clear: both;"></div>
                </div>
                
            </div>
            
    <?php }?>
            <!-------------------------------------------------------MID------------------------------------------------------>
            <div style="background: #fff; border-radius: 0px; overflow: hidden; margin: 2px 0 0; padding: 20px 15px;">
               <?php if($attorney->thankyou_show == 'yes'){ ?>
                <div style="background: #0e3e64;padding: 15px;    border-radius: 5px;">
                    <p style="color: #fff;font-family: Arial; text-align: center;font-size: 22px; font-weight: bold;padding: 0 0 0 15px;margin: 0;"> {!! $attorney->thankyou_heading !!}</p>
                    <p style="text-align: center;color: #fff;font-family: Arial;font-size: 16px;line-height: 21px;">
                       {!! $attorney->thankyou_subheading !!}
                    </p>
                    <?php $thankyoutext = json_decode($attorney->thankyou_text); ?>
                    <?php
                        if (isset($thankyoutext)) {
                            if (isset($thankyoutext[0])) {
                                ?>
                                <p style="text-align: center;color: #ffbf00;font-family: Arial;font-size: 16px;line-height: 21px;margin: 0;font-weight: bold">{!! $thankyoutext[0] !!}</p>
                            <?php }
                            if (isset($thankyoutext[1])) {
                                ?>
                                 <p style="text-align: center;color: #ffbf00;font-family: Arial;font-size: 16px;line-height: 21px;margin: 0;font-weight: bold">{!! $thankyoutext[1] !!}</p>
                            <?php }
                            if (isset($thankyoutext[2])) {
                                ?>
                                <p style="text-align: center;color: #ffbf00;font-family: Arial;font-size: 16px;line-height: 21px;margin: 0;font-weight: bold">{!! $thankyoutext[2] !!}</p>
                            <?php }
                            if (isset($thankyoutext[3])) {
                                ?>
                              <p style="text-align: center;color: #ffbf00;font-family: Arial;font-size: 16px;line-height: 21px;margin: 0;font-weight: bold">{!! $thankyoutext[3] !!}</p>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div style="border: 1px solid #cecece; float: left; margin: 25px 0; width: 100%;"></div>
                <div style="clear: both;"></div>
               <?php } ?>
                <?php
                $articles = $attorney->articles;
                $count = count($articles);
                $z = 0;
                foreach ($articles as $article) {
                    $z = $z + 1;
                    if ($count % 2 == 0) {
                        if ($z % 2 == 0) {
                            ?>
                            <div style="float: left; width: 270px">
                                <p style="color: #451d0d; font-family: Arial; font-size: 22px; font-weight: bold; margin: 0;">{!! $article->article_title !!}</p>
                                <p style="color: #212121; font-family: Arial; font-size: 13px;">{!! $article->article_detail !!}</p>
                                <a style="border: 1px solid #f7941d; color: #f7941d; font-family: Arial; font-size: 11px; text-transform: uppercase; padding: 10px 20px; text-decoration: none;" target="_blank" href="{!! $article->article_link !!}">READ MORE</a>
                            </div>
                            <div style="float: right; width: 288px;"><img src="{!! url('/').'/uploads/files/'.$article->article_image !!}"></div>
                            <div style="border: 1px solid #cecece; float: left; margin: 25px 0; width: 100%;"></div>
                            <div style="clear: both;"></div>
                         <?php } else { ?>
                            <div style="float: right; width: 270px">
                                <p style="color: #451d0d; font-family: Arial; font-size: 22px; font-weight: bold; margin: 0;">{!! $article->article_title !!}</p>
                                <p style="color: #212121; font-family: Arial; font-size: 13px;">{!! $article->article_detail !!}</p>
                                <a style="border: 1px solid #f7941d; color: #f7941d; font-family: Arial; font-size: 11px; text-transform: uppercase; padding: 10px 20px; text-decoration: none;" target="_blank" href="{!! $article->article_link !!}">READ MORE</a>
                            </div>
                            <div style="float: left; width: 288px;"><img src="{!! url('/').'/uploads/files/'.$article->article_image !!}"></div>
                            <div style="border: 1px solid #cecece; float: left; margin: 25px 0; width: 100%;"></div>
                            <div style="clear: both;"></div>
                        <?php } ?>
                        <?php
                        } else {
                            if ($z % 2 != 0) {
                                ?>
                            <div style="float: left; width: 270px">
                                <p style="color: #451d0d; font-family: Arial; font-size: 22px; font-weight: bold; margin: 0;">{!! $article->article_title !!}</p>
                                <p style="color: #212121; font-family: Arial; font-size: 13px;">{!! $article->article_detail !!}</p>
                                <a style="border: 1px solid #f7941d; color: #f7941d; font-family: Arial; font-size: 11px; text-transform: uppercase; padding: 10px 20px; text-decoration: none;" target="_blank" href="{!! $article->article_link !!}">READ MORE</a>
                            </div>
                            <div style="float: right; width: 288px;"><img src="{!! url('/').'/uploads/files/'.$article->article_image !!}"></div>
                            <div style="border: 1px solid #cecece; float: left; margin: 25px 0; width: 100%;"></div>
                            <div style="clear: both;"></div>
                             <?php } else { ?>
                            <div style="float: right; width: 270px">
                                <p style="color: #451d0d; font-family: Arial; font-size: 22px; font-weight: bold; margin: 0;">{!! $article->article_title !!}</p>
                                <p style="color: #212121; font-family: Arial; font-size: 13px;">{!! $article->article_detail !!}</p>
                                <a style="border: 1px solid #f7941d; color: #f7941d; font-family: Arial; font-size: 11px; text-transform: uppercase; padding: 10px 20px; text-decoration: none;" target="_blank" href="{!! $article->article_link !!}">READ MORE</a>
                            </div>
                            <div style="float: left; width: 288px;"><img src="{!! url('/').'/uploads/files/'.$article->article_image !!}"></div>
                            <div style="border: 1px solid #cecece; float: left; margin: 25px 0; width: 100%;"></div>
                            <div style="clear: both;"></div>
                        <?php } ?>

                        <?php
                        }
                    }
                    ?>
                  <?php if($attorney->joke_show == 'yes'){ ?>      
                 <div style="background: #0e3e64;padding: 15px;    border-radius: 5px;">
                    <p style="color: #fff;font-family: Arial; text-align: center;font-size: 31px; font-weight: bold;padding: 0 0 15px 0;margin: 0;">{!! $attorney->joke_heading !!}</p>
                    <img src="{!! url('/').'/uploads/files/'.$attorney->joke_background !!}" style="float: none; padding-left: 0px; padding-bottom: 3px;width: 100%">
                 </div>    
                 <div style="border: 1px solid #cecece; float: left; margin: 25px 0; width: 100%;"></div>
                 <div style="clear: both;"></div>
                  <?php } ?>          
                <div style="float: left; width: 288px;"><img src="{!! url('/').'/uploads/files/'.$similar->article1_image !!}"></div>
                <div style="float: right; width: 270px">
                    <p style="color: #451d0d; font-family: Arial; font-size: 19px; font-weight: bold; margin: 0;">{!! $similar->article1_heading !!}</p>
                    <p style="color: #212121; font-family: Arial; font-size: 13px;"><b>To begin with:</b> {!! $similar->article1_detail !!}</p>
                    <a style="border: 1px solid #f7941d; color: #f7941d; font-family: Arial; font-size: 11px; text-transform: uppercase; padding: 10px 20px; text-decoration: none;" target="_blank" href="{!! $similar->article1_link !!}">READ MORE</a>
                </div>

                <div style="border: 1px solid #cecece; float: left; margin: 25px 0; width: 100%;"></div>
                <div style="clear: both;"></div>
                <div class="google_box" style="background: #2265ac;padding: 15px;border-radius: 10px;">
                    <?php if ($attorney->google_yelp == "google") { ?>
                        <img src="{!! url('/').'/uploads/files/'.$similar->google_image !!}" style="float: right;margin: 5px 10px;" />
                    <?php } else { ?>
                        <img src="{!! url('/').'/uploads/files/'.$similar->yelp_image !!}" style="float: right;margin: 5px 10px;" />
                    <?php } ?>
                    <p style="color: #ffc20e;font-family: Arial;font-size: 24px;font-weight: bold;padding: 0px; margin: 0px;">
                        {!! $similar->google_heading !!}
                    </p>
                    <p style="font-size: 13px;font-family: Arial;color: #fff;padding: 12px 0 0 0px; margin: 0px;">
                        {!! $similar->google_text !!}
                    </p>
                    <div style="clear: both;"></div>
                    <?php if ($attorney->google_yelp == "google") { ?>
                        <a href="{!! $attorney->google !!}" target="_blank" style="border: 1px solid rgb(247, 148, 29); display: block; text-transform: uppercase; font-size: 15px; float: right; color: rgb(255, 255, 255); text-align: center; padding: 10px 0px; text-decoration: none; width: 253px;">
                            Review us on google+
                        </a>
                    <?php } else { ?>
                        <a href="{!! $attorney->yelp !!}" target="_blank" style="border: 1px solid rgb(247, 148, 29); display: block; text-transform: uppercase; font-size: 15px; float: right; color: rgb(255, 255, 255); text-align: center; padding: 10px 0px; text-decoration: none; width: 253px;">
                            Review us on yelp
                        </a>
                    <?php } ?>
                    <div style="clear: both;"></div>
                </div>

                <div style="border: 1px solid #cecece; float: left; margin: 25px 0; width: 100%;"></div>
                <div style="clear: both;"></div>
                <div style="float: left; width: 270px">
                    <p style="color: #451d0d; font-family: Arial; font-size: 19px; font-weight: bold; margin: 0;">{!! $similar->article2_heading !!}</p>
                    <p style="color: #212121; font-family: Arial; font-size: 13px;">{!! $similar->article2_detail !!}</p>
                    <a style="border: 1px solid #f7941d; color: #f7941d; font-family: Arial; font-size: 11px; text-transform: uppercase; padding: 10px 20px; text-decoration: none;" target="_blank" href="{!! $similar->article2_link !!}">READ MORE</a>
                </div>
                <div style="float: right; width: 288px;"><img src="{!! url('/').'/uploads/files/'.$similar->article2_image !!}"></div>
                <div style="clear: both;"></div>
                <div style="border: 1px solid #cecece; float: left; margin: 25px 0; width: 100%;"></div>
                <div style="float: left; width: 270px">
                    <img src="{!! url('/').'/uploads/files/'.$similar->article3_image !!}">
                </div>

                <div style="float: right; width: 270px">
                    <p style="color: #451d0d; font-family: Arial; font-size: 19px; font-weight: bold; margin: 0;">{!! $similar->article3_heading !!}</p>
                    <p style="color: #212121; font-family: Arial; font-size: 13px;">{!! $similar->article3_detail !!}</p>
                    <a style="border: 1px solid #f7941d; color: #f7941d; font-family: Arial; font-size: 11px; text-transform: uppercase; margin: 15px 0 0; padding: 10px 20px; text-decoration: none;" target="_blank" href="{!! $similar->article3_link !!}">READ MORE</a>
                </div>

                <div style="clear: both;"></div>
                <div style="border: 1px solid #cecece; float: left; margin: 25px 0; width: 100%;"></div>
                <div style="clear: both;"></div>
                <!-- Practice Area -->
                <div style="font-family: arial;background: rgb(103, 0, 1) none repeat scroll 0% 0%; border: 2px solid rgb(174, 174, 174); color: rgb(255, 255, 255); font-size: 18px; text-align: center; line-height: 27px; padding: 10px 22px;">
                    <p style="padding: 0px; margin: 0px 0px 20px;">
                        {!! $similar->practicearea_heading !!}
                    </p>
                    <div style="text-align: center;width: 435px; margin: 0 auto;">
                        <?php
                        $practiceareas = $attorney->practiceareas;

                        $var = 1;
                        $total = count($practiceareas);
                        foreach ($practiceareas as $area) {
//                         print_r($area);exit();
                            if ($var % 2 == 0) {
                                ?>
                                <div style="float: right;width: 208px; text-align: center; margin: 0 auto;">
                                    <a href=" {!! $area->link !!}" target="_blank" style="    margin-bottom: 10px;border: 1px solid rgb(247, 148, 29); width: 178px; display: block; text-decoration: none; padding: 6px 15px; font-family: arial; font-size: 19px; color: rgb(248, 149, 29);">{!! $area->name !!}</a>
                                </div>

                             <?php } else if ($var == $total && $var % 2 != 0) { ?>
                                <div style="clear: both;"></div>
                                <div style="float: none;width: 208px; text-align: center; margin: 0 auto;">
                                    <a href="{!! $area->link !!}" target="_blank" style="    margin-bottom: 10px;border: 1px solid rgb(247, 148, 29); width: 178px; display: block; text-decoration: none; padding: 6px 15px; font-family: arial; font-size: 19px; color: rgb(248, 149, 29);">{!! $area->name !!}</a>
                                </div>
                                <div style="clear: both;"></div>

                            <?php } else { ?>

                                <div style="float: left;width: 208px; text-align: center; margin: 0 auto;">
                                    <a href="{!! $area->link !!}" target="_blank" style="    margin-bottom: 10px;border: 1px solid rgb(247, 148, 29); width: 178px; display: block; text-decoration: none; padding: 6px 15px; font-family: arial; font-size: 19px; color: rgb(248, 149, 29);">{!! $area->name !!}</a>
                                </div>                       
                                <?php
                            }
                            $var = $var + 1;
                        }
                        ?>
                    </div>
                    <div style="clear: both;"></div>
                </div>
                <div style="clear: both;"></div>
                <div style="border: 1px solid #cecece; float: left; margin: 25px 0; width: 100%;"></div>
                <?php if($attorney->recipe_show == 'yes'){ ?>
                <p style=" clear: both; color: #451d0d; font-family: Arial; font-size: 25px; font-weight: bold; margin: 0; text-align: center; text-transform: uppercase;">{!! $similar->recipe_heading !!}</p>
                <div style="border: 2px solid #cecece; display: block; margin: 15px auto 0; width: 75px;"></div>
                <p style="text-align: center;color: #f7941d; font-family: Arial; font-size: 17px; font-weight: bold; margin: 19px 0 0 0; text-transform: uppercase">{!! $similar->recipe_sub_heading !!}</p>

                <div style="margin: 25px 0 0;">
                    <div style="float: left; width: 270px">
                        <p style="margin: 0;color: #212121; font-family: Arial; font-size: 14px; font-weight: bold; text-transform: uppercase;">{!! $similar->ingredient_heading !!}</p>

                        <ul style="margin: 0; padding: 0;">
                            <?php
                            $ingredient_text = json_decode($similar->ingredient_text);

                            if (isset($ingredient_text)) {
                                if (isset($ingredient_text[0])) {
                                    ?>
                                    <li style="background: url(http://speakeasymarketinginc.com/client-nl-images/dotted_dec.png) no-repeat left 5px; color: #212121; font-family: Arial; font-size: 13px; margin: 7px 0 0; list-style: none; padding-left: 20px">{!! $ingredient_text[0] !!}</li>
                                <?php }
                                if (isset($ingredient_text[1])) {
                                    ?>
                                    <li style="background: url(http://speakeasymarketinginc.com/client-nl-images/dotted_dec.png) no-repeat left 5px; color: #212121; font-family: Arial; font-size: 13px; margin: 7px 0 0; list-style: none; padding-left: 20px">{!! $ingredient_text[1] !!}</li>
                                <?php }
                                if (isset($ingredient_text[2])) {
                                    ?>
                                    <li style="background: url(http://speakeasymarketinginc.com/client-nl-images/dotted_dec.png) no-repeat left 5px; color: #212121; font-family: Arial; font-size: 13px; margin: 7px 0 0; list-style: none; padding-left: 20px">{!! $ingredient_text[2] !!}</li>
                                <?php }
                                if (isset($ingredient_text[3])) {
                                    ?>
                                    <li style="background: url(http://speakeasymarketinginc.com/client-nl-images/dotted_dec.png) no-repeat left 5px; color: #212121; font-family: Arial; font-size: 13px; margin: 7px 0 0; list-style: none; padding-left: 20px">{!! $ingredient_text[3] !!}</li>
                                    <?php }
                                    if (isset($ingredient_text[4])) {
                                        ?>
                                    <li style="background: url(http://speakeasymarketinginc.com/client-nl-images/dotted_dec.png) no-repeat left 5px; color: #212121; font-family: Arial; font-size: 13px; margin: 7px 0 0; list-style: none; padding-left: 20px">{!! $ingredient_text[4] !!}</li>
                                <?php }
                            }
                            ?>
                        </ul>
                        <a style="display: inline-block;border: 1px solid #f7941d; color: #f7941d; font-family: Arial; font-size: 11px; text-transform: uppercase; margin: 10px 0 0; padding: 10px 20px; text-decoration: none;" target="_blank" href="{!! $similar->ingredient_link !!}">READ MORE</a>
                    </div>
                    <div style="float: right; width: 288px;"><img src="{!! url('/').'/uploads/files/'.$similar->ingredient_image !!}"></div>
                    <div style="clear: both;"></div>

                </div>
                <?php } ?>
            </div>
            <!------------------------------------------------MID END --------------------------------------------------------------->

            <div style="background: #333333; border-radius:0;overflow: hidden; margin: 0px 0 0; padding: 15px;">
                <div style="float: left; width: 292px; "> 
                    <div style="margin: 10px 0 0;"><img src="{!! url('/').'/uploads/files/'.$attorney->footer_logo !!}"></div>
                    <p style="color: #999999;  font-family: Arial; font-size: 13px; line-height: 22px;">{!! $attorney->footer_text !!}</p>
                </div>
                <div style="float: right; width: 210px;">
                    <p style="color: #fff;  font-family: Arial; font-size: 24px; margin: 13px 0 0;">CONTACT US</p>
                    <p style="color: #fff;  font-family: Arial;font-size: 14px;font-weight: bold;">Address:</p>
                     <?php $footeraddress = json_decode($attorney->footer_address); 
                    if (isset($footeraddress)) { 
                        foreach($footeraddress as $address){
                        ?>
                    <p style="color: #999999; font-family: Arial; font-size: 13px; line-height: 20px;">{!! $address !!}</p>
                    <?php }                    
                        } ?>
                       <?php $phonenumber = json_decode($attorney->phone_number); 
                    if (isset($phonenumber)) { 
                        foreach($phonenumber as $number){
                        ?>
                     <p style="color: #999999;  font-family: Arial; font-size: 13px;"><a style="color: #999999;  font-family: Arial; font-size: 13px;">{!! $number !!}</a></p> 
                    <?php }                    
                        } ?>
                 
                    <p style="color: #fff;  font-family: Arial; font-size: 14px; font-weight: bold; margin: 20px 0 0;">Website:</p>
                           <?php $websites = json_decode($attorney->footer_website); 
                    if (isset($websites)) { 
                        foreach($websites as $website){
                        ?>
                    <a target="_blank" style="color: #999999;  font-family: Arial; font-size: 13px; margin: 5px 0 0;text-decoration: none;" href="{!! $attorney->website !!}">{!! $website !!}</a>
                    <?php }                    
                        } ?>
                    
                </div>
            </div>

            <div style="background: #000; border-radius: 0 0 5px 5px; overflow: hidden; padding: 15px;">
                <p style="color: #999999; float: none;  font-family: Arial; font-size: 13px; margin: 0;text-align: center;">{!! $attorney->copyright !!}</p>
                <ul style="float: none; margin: 8px 0 0; padding: 0;">
                    <li style="float: none;text-align: center;list-style: none;">
                        <a style="color: #fff; font-family: Arial;font-size: 20px; text-decoration: none; padding: 0 15px;font-weight: bold;"  target="_blank" href="{!! $attorney->unsubscribe !!}">unsubscribe</a>
                    </li>
                </ul>
            </div>

        </div>
    </body>
</html>
