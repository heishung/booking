@extends('frontend.index')
@section('hotel')
    <div class="bg-grey margin-bottom-40">
        <div class="container">
            <div class="body-margin-head">
                <div class="columns">
                    <div class="column has-text-centered text-uppercase">
                        <h1>Contact Us</h1>
                        <p class="center-block line-grey margin-top-20 margin-bottom-20">&nbsp;</p>
                    </div>
                </div>
                <div class="columns">
                    <div style="margin: 0 145px; text-align: center;">
                        Thank you for your interest in Orchid Cruise. If you need to send us an inquiry, please use our Inquiry Form and Manager will respond to you within 24 hours. Or you can wait , please call us : (84.0) 9 3663 8069.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" container">
        <div class="columns">
            <div class="column"><h3 class="text-special" style="font-size: 20px; margin-bottom: 20px;">Contact Address</h3>
                <div class="columns padding-right-40">
                    <div class="is-12">
                        <p><strong>Halong Head Office</strong></p>
                        <p># 32, Anh Dao St, Ha Long City, Quang Ninh Province</p>
                        <p>Tel: (+84.33) 3 846 810/ 3 846 811 </p>
                        <p>Fax: (+84.33) 3 846 599</p>
                        <p>Web: <a class="text-orange" target="_blank" href="http://www.orchidcruises.com/">www.orchidcruises.com</a></p>
                        <p>Email : <a class="text-orange" href="mailto:info@orchidcruises.com">info@orchidcruises.com</a></p>
                    </div>
                    <div style="border-bottom: 1px solid #c1c1c1; margin-top: 20px; margin-bottom: 30px;"></div>
                </div>

                <div class="col-xs-12">
                    <p><strong>Hanoi Sales Office</strong></p>
                    <p># 5/33B Pham Ngu Lao street, Hoan Kiem district, Hanoi</p>
                    <p>Tel: (+84.24) 3759 3098/ 3927 5797/ 3927 5796</p>
                    <p>Fax: (+84.24) 3759 3097</p>
                    <p>HOT LINE: +84 9 3663 8069 – Martin/Mr (24/7 service)</p>
                    <p>Email : <a class="text-orange" href="mailto:sales@orchidcruises.com">sales@orchidcruises.com</a></p>
                    <p>&nbsp;</p>
                </div>
            </div>
            <div class="column">
                @if (session('notification'))
                    <span class="help-block" >
                                {{session('notification')}}
                            </span>
                @endif
                <h3 class="text-special margin-bottom-20" style="font-size: 20px; margin-bottom: 20px;">Contact Form</h3>
                {!! Form::open(['method'=>'post','route'=>'contactpost','role'=>'form']) !!}
                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input class="input" type="text" name="name" placeholder="Text input">
                        </div>
                    </div>
                @if ($errors->any())
                    <span class="help-block" >
                                {{$errors->first('name')}}
                            </span>
                @endif

                    <div class="field">
                        <label class="label is-small">Small input</label>
                        <div class="control has-icons-left has-icons-right">
                            <input class="input is-small" name="email" type="email" placeholder="Email">
                            <span class="icon is-small is-left">
      <i class="fa fa-envelope"></i>
    </span>
                            <span class="icon is-small is-right">
      <i class="fa fa-check"></i>
    </span>
                        </div>
                    </div>
                    @if ($errors->any())
                        <span class="help-block" >
                                {{$errors->first('name')}}
                            </span>
                    @endif
                    <div class="field is-horizontal">
                        <div class="field-body">
                            <div class="field is-expanded">
                                <div class="field has-addons">
                                    <p class="control">
                                        <a class="button is-static">
                                            Phone
                                        </a>
                                    </p>
                                    <p class="control is-expanded">
                                        <input class="input" type="tel" name="phone" placeholder="Your phone number">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Message</label>
                        <div class="control">
                            <textarea class="textarea" name="mess" placeholder="Textarea"></textarea>
                        </div>
                    </div>
                    <div class="field has-addons">
                        <div class="control is-expanded">
                            <div class="select is-fullwidth">
                                <select class="form-control required-contact" name="address" id="country" tabindex="4">
                                    <option value="">----- Select country -----</option>
                                    <option value="af">Afghanistan</option>
                                    <option value="al">Albania</option>
                                    <option value="dr">Algeria</option>
                                    <option value="as">American Samoa</option>
                                    <option value="ad">Andorra</option>
                                    <option value="ao">Angola</option>
                                    <option value="ai">Anguilla</option>
                                    <option value="ag">Antigua and Barbuda</option>
                                    <option value="ar">Argentina</option>
                                    <option value="am">Armenia</option>
                                    <option value="aw">Aruba</option>
                                    <option value="au">Australia</option>
                                    <option value="at">Austria</option>
                                    <option value="az">Azerbaijan</option>
                                    <option value="bs">Bahamas</option>
                                    <option value="bh">Bahrain</option>
                                    <option value="bd">Bangladesh</option>
                                    <option value="bb">Barbados</option>
                                    <option value="by">Belarus</option>
                                    <option value="be">Belgium</option>
                                    <option value="bz">Belize</option>
                                    <option value="bj">Benin</option>
                                    <option value="bm">Bermuda</option>
                                    <option value="bt">Bhutan</option>
                                    <option value="bo">Bolivia</option>
                                    <option value="ba">Bosnia and Herzegovina</option>
                                    <option value="bw">Botswana</option>
                                    <option value="br">Brazil</option>
                                    <option value="io">British Indian Ocean Territory</option>
                                    <option value="bn">Brunei</option>
                                    <option value="bg">Bulgaria</option>
                                    <option value="bf">Burkina Faso</option>
                                    <option value="bi">Burundi</option>
                                    <option value="kh">Cambodia</option>
                                    <option value="cm">Cameroon</option>
                                    <option value="ca">Canada</option>
                                    <option value="cv">Cape Verde</option>
                                    <option value="ky">Cayman Islands</option>
                                    <option value="cf">Central African Republic</option>
                                    <option value="td">Chad</option>
                                    <option value="cl">Chile</option>
                                    <option value="cn">China</option>
                                    <option value="cx">Christmas Island</option>
                                    <option value="cc">Cocos Islands</option>
                                    <option value="co">Colombia</option>
                                    <option value="km">Comoros</option>
                                    <option value="cg">Congo</option>
                                    <option value="ck">Cook Islands</option>
                                    <option value="cr">Costa Rica</option>
                                    <option value="hr">Croatia</option>
                                    <option value="cu">Cuba</option>
                                    <option value="cy">Cyprus</option>
                                    <option value="cz">Czech Republic</option>
                                    <option value="dk">Denmark</option>
                                    <option value="dj">Djibouti</option>
                                    <option value="dm">Dominica</option>
                                    <option value="do">Dominican Republic</option>
                                    <option value="tl">East Timor</option>
                                    <option value="ec">Ecuador</option>
                                    <option value="eg">Egypt</option>
                                    <option value="sv">El Salvador</option>
                                    <option value="gq">Equatorial Guinea</option>
                                    <option value="er">Eritrea</option>
                                    <option value="ee">Estonia</option>
                                    <option value="et">Ethiopia</option>
                                    <option value="fk">Falkland Islands</option>
                                    <option value="fo">Faroe Islands</option>
                                    <option value="fj">Fiji</option>
                                    <option value="fi">Finland</option>
                                    <option value="fr">France</option>
                                    <option value="ga">Gabon</option>
                                    <option value="gm">Gambia</option>
                                    <option value="ge">Georgia</option>
                                    <option value="de">Germany</option>
                                    <option value="gh">Ghana</option>
                                    <option value="gi">Gibraltar</option>
                                    <option value="gr">Greece</option>
                                    <option value="gl">Greenland</option>
                                    <option value="gd">Grenada</option>
                                    <option value="gp">Guadeloupe</option>
                                    <option value="gu">Guam</option>
                                    <option value="gt">Guatemala</option>
                                    <option value="gn">Guinea</option>
                                    <option value="gw">Guinea-Bissau</option>
                                    <option value="gy">Guyana</option>
                                    <option value="ht">Haiti</option>
                                    <option value="hn">Honduras</option>
                                    <option value="hk">Hong Kong</option>
                                    <option value="hu">Hungary</option>
                                    <option value="is">Iceland</option>
                                    <option value="in">India</option>
                                    <option value="id">Indonesia</option>
                                    <option value="ir">Iran</option>
                                    <option value="iq">Iraq</option>
                                    <option value="ie">Ireland</option>
                                    <option value="il">Israel</option>
                                    <option value="it">Italy</option>
                                    <option value="jm">Jamaica</option>
                                    <option value="jp">Japan</option>
                                    <option value="jo">Jordan</option>
                                    <option value="kz">Kazakhstan</option>
                                    <option value="ke">Kenya</option>
                                    <option value="ki">Kiribati</option>
                                    <option value="kp">Korea, North</option>
                                    <option value="kr">Korea, South</option>
                                    <option value="kw">Kuwait</option>
                                    <option value="kg">Kyrgyzstan</option>
                                    <option value="la">Laos</option>
                                    <option value="lv">Latvia</option>
                                    <option value="lb">Lebanon</option>
                                    <option value="ls">Lesotho</option>
                                    <option value="lr">Liberia</option>
                                    <option value="ly">Libya</option>
                                    <option value="li">Liechtenstein</option>
                                    <option value="lt">Lithuania</option>
                                    <option value="lu">Luxembourg</option>
                                    <option value="mo">Macau</option>
                                    <option value="mk">Macedonia</option>
                                    <option value="mg">Madagascar</option>
                                    <option value="mw">Malawi</option>
                                    <option value="my">Malaysia</option>
                                    <option value="mv">Maldives</option>
                                    <option value="ml">Mali</option>
                                    <option value="mt">Malta</option>
                                    <option value="mh">Marshall Islands</option>
                                    <option value="mq">Martinique</option>
                                    <option value="mr">Mauritania</option>
                                    <option value="mu">Mauritius</option>
                                    <option value="yt">Mayotte</option>
                                    <option value="mx">Mexico</option>
                                    <option value="fm">Micronesia</option>
                                    <option value="md">Moldova</option>
                                    <option value="mc">Monaco</option>
                                    <option value="mn">Mongolia</option>
                                    <option value="ms">Montserrat</option>
                                    <option value="ma">Morocco</option>
                                    <option value="mz">Mozambique</option>
                                    <option value="mm">Myanmar</option>
                                    <option value="na">Namibia</option>
                                    <option value="nr">Nauru</option>
                                    <option value="np">Nepal</option>
                                    <option value="nl">Netherlands</option>
                                    <option value="an">Netherlands Antilles</option>
                                    <option value="nc">New Caledonia</option>
                                    <option value="nz">New Zealand</option>
                                    <option value="ni">Nicaragua</option>
                                    <option value="ne">Niger</option>
                                    <option value="ng">Nigeria</option>
                                    <option value="nu">Niue</option>
                                    <option value="nf">Norfolk Island</option>
                                    <option value="mp">Northern Mariana Islands</option>
                                    <option value="no">Norway</option>
                                    <option value="om">Oman</option>
                                    <option value="pk">Pakistan</option>
                                    <option value="pw">Palau</option>
                                    <option value="pa">Panama</option>
                                    <option value="pg">Papua New Guinea</option>
                                    <option value="py">Paraguay</option>
                                    <option value="pe">Peru</option>
                                    <option value="ph">Philippines</option>
                                    <option value="pn">Pitcairn Island</option>
                                    <option value="pl">Poland</option>
                                    <option value="pt">Portugal</option>
                                    <option value="pr">Puerto Rico</option>
                                    <option value="qa">Qatar</option>
                                    <option value="re">Reunion</option>
                                    <option value="ro">Romania</option>
                                    <option value="ru">Russia</option>
                                    <option value="rw">Rwanda</option>
                                    <option value="kn">Saint Kitts &amp; Nevis</option>
                                    <option value="lc">Saint Lucia</option>
                                    <option value="vc">Saint Vincent</option>
                                    <option value="ws">Samoa</option>
                                    <option value="sm">San Marino</option>
                                    <option value="st">Sao Tome</option>
                                    <option value="sa">Saudi Arabia</option>
                                    <option value="sn">Senegal</option>
                                    <option value="sc">Seychelles</option>
                                    <option value="sl">Sierra Leone</option>
                                    <option value="sg">Singapore</option>
                                    <option value="sk">Slovakia</option>
                                    <option value="si">Slovenia</option>
                                    <option value="so">Somalia</option>
                                    <option value="za">South Africa</option>
                                    <option value="es">Spain</option>
                                    <option value="lk">Sri Lanka</option>
                                    <option value="sh">St. Helena</option>
                                    <option value="pm">St. Pierre</option>
                                    <option value="sd">Sudan</option>
                                    <option value="sr">Suriname</option>
                                    <option value="sj">Svalbard</option>
                                    <option value="sz">Swaziland</option>
                                    <option value="se">Sweden</option>
                                    <option value="ch">Switzerland</option>
                                    <option value="sy">Syria</option>
                                    <option value="tw">Taiwan</option>
                                    <option value="tj">Tajikistan</option>
                                    <option value="tz">Tanzania</option>
                                    <option value="th">Thailand</option>
                                    <option value="tg">Togo</option>
                                    <option value="tk">Tokelau</option>
                                    <option value="to">Tonga</option>
                                    <option value="tt">Trinidad</option>
                                    <option value="tn">Tunisia</option>
                                    <option value="tr">Turkey</option>
                                    <option value="tm">Turkmenistan</option>
                                    <option value="tc">Turks and Caicos</option>
                                    <option value="tv">Tuvalu</option>
                                    <option value="ug">Uganda</option>
                                    <option value="ua">Ukraine</option>
                                    <option value="ae">United Arab Emirates</option>
                                    <option value="uk">United Kingdom</option>
                                    <option value="us">United States</option>
                                    <option value="uy">Uruguay</option>
                                    <option value="uz">Uzbekistan</option>
                                    <option value="vu">Vanuatu</option>
                                    <option value="va">Vatican City</option>
                                    <option value="ve">Venezuela</option>
                                    <option value="vn">Vietnam</option>
                                    <option value="vi">Virgin Islands</option>
                                    <option value="wf">Wallis and Futuna</option>
                                    <option value="eh">Western Sahara</option>
                                    <option value="ye">Yemen</option>
                                    <option value="zm">Zambia</option>
                                    <option value="zw">Zimbabwe</option>
                                    <option value="ot">Other Country</option>
                                </select>
                            </div>
                        </div>
                        <div class="control">
                            <button type="submit" class="button is-primary">Choose</button>
                        </div>
                    </div>
                    <div class="control">
                        <button class="button is-primary">Submit</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div>
    <style>
      .help-block{font-size: 30px;
          color: brown;
          background: #00d1b2;
          width: 100%;
          border-radius: 9px;}
    </style>
@endsection