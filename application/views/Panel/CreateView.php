<div class="container">
    <h1 class="center">Hoşgeldin Doğasever,</h1>
    <h5 class="center">Bize biraz kendini anlatır mısın?</h5>
    <h6 class="center">Bu aşamada size "bunları neden istiyorsunuz ki?" diyeceğiniz sorular soracağız.</h6>
    <br />
    <div class="row">
        <div>
            <form class="col s12" method="post" accept-charset="utf-8">
                <div class="row">
                    <div class="input-field col s12 m4">
                        <input placeholder="İsminiz nedir ?" id="name_input" name="name_input" type="text" class="validate" required>
                        <input id="userid_input" name="userid_input" type="hidden" value="<?php echo $_SESSION['user_id']; ?>">
                        <label for="title">İsminiz</label>
                    </div>
                    <div class="input-field col s12 m4">
                        <input placeholder="Takma isminiz/Lakabınız nedir ?" id="nickName_input" name="nickName_input" type="text" class="validate">
                        <label for="surName_input">Takma İsminiz (Var ise)</label>
                    </div>
                    <div class="input-field col s12 m4" required>
                        <input placeholder="Soyisminiz nedir ?" id="surName_input" name="surName_input" type="text" class="validate">
                        <label for="surName_input">Soy isminiz</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <select id="gender_input" name="gender_input" required>
                            <option value="" disabled selected>Cinsiyetiniz Nedir ?</option>
                            <option value="0">Kadın</option>
                            <option value="1">Erkek</option>
                        </select>
                        <label>Cinsiyetiniz</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <select id="paranoid_input" name="paranoid_input" required>
                        <option value="" disabled selected>Paranoyaklık Seviyeniz?</option>
                            <option value="0">Nereden bileyim kredi çekmeyeceğinizi?</option>
                            <option value="1">Veriyim de herkesle paylaşmayın</option>
                            <option value="2">Sallayayım da hemde girmemiş olmam</option>
                            <option value="3">Kötüye bi şey olmaz</option>
                        </select>
                        <label>TC NO için Paranoyaklık</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input placeholder="TC Kimlik numaranız nedir ?" id="citizen_input" name="citizen_input" type="text" class="validate">
                        <label for="citizen_input">TC Kimlik No</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <select id="camperLevel_input" name="camperLevel_input" required>
                        <option value="" disabled selected>Kampçılık Seviyeniz ?</option>
                            <option value="0">Daha önce hiç kamp yapmadım.</option>
                            <option value="1">Korkmuyor musunuz, ayı filan?</option>
                            <option value="2">Küçükken İzciydim</option>
                            <option value="3">Bi iki kere gittim ya</option>
                            <option value="4">Zaman buldukça gidiyoz hacı ya</option>
                            <option value="5">Bulduğum her düzlüğe çadır atarım</option>
                            <option value="6">Sen ne diyon dağcıyım oğlum ben</option>
                        </select>
                        <label>Kampçılık</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <select id="isStudent_input" name="isStudent_input" required>
                        <option value="" disabled selected>Öğrenci misiniz ?</option>
                            <option value="0">Okumuyom Ben</option>
                            <option value="1">Okuyoruz bi şeyler</option>
                        </select>
                        <label>Üniversite & Y.Lisans</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <input placeholder="Önce fakülteni sonra kimi seçtiğini söyle?" id="uniDep_input" name="uniDep_input" type="text" class="validate">
                        <label for="uniDep_input">Bölümünüz</label>
                    </div>

                    <div class="input-field col s12 m4" required>   
                        <input placeholder="Referansınız var mı kimin başını yakalım?" id="ref_input" name="ref_input" type="text" class="validate">
                        <label for="ref_input">Referans</label>
                    </div>

                    <div class="input-field col s12 m4" required>
                        <input placeholder="Whatsapp var mı burası kasıyor" id="phone_input" name="phone_input" type="text" class="validate">
                        <label for="phone_input">Telefon No</label>
                    </div>

                    <div class="input-field col s12 m4" required>
                        <input placeholder="Kötü haberi kime verelim ?" id="ePhone_input" name="ePhone_input" type="text" class="validate">
                        <label for="phone_input">Acil durumlarda Telefon No</label>
                    </div>

                </div>
                <div class="row">
                    <div class="col s12 m6">
                        <h6>* T.C.Kimlik No, ilgili kurumdan izin alınırken gerektiğinden resmi kurumlara iletilmesi amacıyla kullanılmaktadır.</h6>
                        <h6>** Telefon No, iletişim amaçlıdır.</h6>
                        <h6>*** T.C. Kimlik Numaranız AES256 şifreleme algoritmasıyla korunmaktadır. Şifrelenmiş şekilde depolanmaktadır. Kimseyle paylaşılmamaktadır. !</h6>
                    </div>
                    <div class="col s12 m6 left">
                        <button type='submit' name='btn_create' class='btn btn-large waves-effect' value="sent">Bilgilerimi Kapsülle</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>