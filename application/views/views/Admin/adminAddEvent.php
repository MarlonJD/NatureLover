<main>
<div class="container">
    <h1 class="center">Hoşgeldin Atmin,</h1>
    <h5 class="center">Aklında ne çılgın fikirler var?</h5>
    <h6 class="center">Hadi kampa gidelim xP !!</h6>
    <br />
    <div class="row">
        <div>
            <form class="col s12" method="post" accept-charset="utf-8">
                <div class="row">
                    <div class="input-field col s12 m4">
                        <input placeholder="Etkinliğin Adı nedir ?" id="name_input" name="name_input" type="text" class="validate" required>
                        <input id="userid_input" name="userid_input" type="hidden" value="<?php echo $_SESSION['user_id']; ?>">
                        <label for="title">Etkinlik Adı</label>
                    </div>
                    <div class="input-field col s12 m8">
                        <input placeholder="örn: Gurleyik-Moto-Fest, Saricicek-2017 gibi" id="permaId_input" name="permaId_input" type="text" class="validate">
                        <label for="permaId_input">Etkinlik Perma Link Adı</label>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="Etkinliğin kısa açıklaması" id="shortDetail_input" name="shortDetail_input" type="text" class="validate" required>
                        <label for="title">Etkinlik Açıklaması</label>
                    </div>
                 </div>
                <div class="row">
                    <div class="input-field col s12 m4">
                        <input placeholder="Birinin etkinliğine gidiyosak yazak buraya" id="owner_input" name="owner_input" type="text" class="validate">
                        <label for="owner_input">Etkinlik Sahibi</label>
                    </div>

                    <div class="input-field col s12 m4">   
                        <input placeholder="örn (Sarıçicek Yaylası, Safranbolu, Karabük)" id="place_input" name="place_input" type="text" class="validate">
                        <label for="place_input">Yer (Bölge, İlçe, İl)</label>
                    </div>

                    <div class="input-field col s6 m2">
                        <input id="date_input" name="date_input" type="date">
                    </div>

                    <div class="input-field col s6 m2">
                        <input id="date2_input" name="date2_input" type="date">
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 m6">
                        <select id="type_input" name="type_input" required>>
                            <option value="" disabled selected>Seçiniz ?</option>
                            <option value="0">Kamp</option>
                            <option value="1">Özel Etkinlik</option>
                            <option value="2">Açık Etkinlik</option>
                        </select>
                        <label>Etkinlik Türü</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <select id="subType_input" name="subType_input" required>>
                        <option value="" disabled selected>Seçiniz</option>
                        <optgroup label="Kamp">
                            <option value="0">Planlı Kamp</option>
                            <option value="1">Özel Amaçlı Kamp</option>
                            <option value="2">Temalı Kamp</option>
                            <option value="3">Kış Kampı</option>
                            <option value="4">İnterrail Kampı</option>
                        </optgroup>
                        <optgroup label="Özel Etkinlik">
                            <option value="10">Trekking (Kamplı Doğa Yürüyüşü)</option>
                            <option value="11">Hiking (Günübirlik Doğa Yürüyüşü)</option>
                            <option value="12">Tırmanış</option>
                            <option value="13">Eğitim</option>
                            <option value="14">İnterrail Etkinliği</option>
                            <option value="15">Grup Toplantısı</option>
                        </optgroup>
                        <optgroup label="Açık Etkinlik">
                            <option value="20">Türkiye Geneli Kamp</option>
                            <option value="21">Bölge Geneli Kamp</option>
                            <option value="22">Şehir Geneli Kamp</option>
                        </optgroup>
                        </select>
                        <label>Alt Tür</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m6">
                        <h6>* Açıklama yok her şey açık.</h6>
                    </div>
                    <div class="col s12 m6 left">
                        <button type='submit' name='btn_create' class='btn btn-large waves-effect' value="sent">Hadi gidelim!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</main>