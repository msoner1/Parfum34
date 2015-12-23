<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    {$sayfa_baslik}
                </h1>
            </div>
        </div>

        <div id="row">
            <table class="table table-hover table-bordered table-responsive">
                {if isset($islem_yapilmayanlar)}
                <thead>
                    <tr><th width="80">ID</th><th>İsim Soyisim</th><th>Aldığı Ürün</th><th>Telefon/E-mail</th><th>Adres</th><th>Tarih</th><th>İşlem Yap</th></tr>
                </thead>
                <tbody>
                    {foreach from=$siparisler item=v key=k}
                            <tr><td>{$v.siparis_id}</td><td>{$v.musteri_adsoyad}</td><td>{if $v.aldigi_urun_id eq 2}Calvin Klein Euphoria For Men(100ml){elseif $v.aldigi_urun_id eq 1}Calvin Klein Euphoria Women(100ml){else}{$v.aldigi_urun_id}{/if}<br/>adeti:{$v.notu}</td><td>{$v.musteri_telefon}<br/>{$v.email}</td><td>{$v.adres}</td><td>{$v.siparis_zamani}</td><td><a href="?btn_fatura_kes={$v.siparis_id}"><button class="btn btn-success">Fatura Kes</button></a><a href="?btn_iptal={$v.siparis_id}"><button class="btn btn-danger">İptal</button></a></td></tr>
                    {/foreach}
                </tbody>
                {/if}
                {if isset($fatura_kesilecekler)}
                    <thead>
                    <tr><th width="80">ID</th><th>İsim Soyisim</th><th>Aldığı Ürün</th><th>Telefon/E-mail</th><th>Adres</th><th>Tarih</th><th>İşlem Yap</th></tr>
                    </thead>
                    <tbody>
                    {foreach from=$siparisler item=v}
                        <tr><td>{$v.siparis_id}</td><td>{$v.musteri_adsoyad}</td><td>{if $v.aldigi_urun_id eq 2}Calvin Klein Euphoria For Men(100ml){elseif $v.aldigi_urun_id eq 1}Calvin Klein Euphoria Women(100ml){else}{$v.aldigi_urun_id}{/if}<br/>adeti:{$v.notu}</td><td>{$v.musteri_telefon}<br/>{$v.email}</td><td>{$v.adres}</td><td>{$v.siparis_zamani}</td><td><a href="?btn_kargoya_gonder={$v.siparis_id}"><button class="btn btn-primary">Kargoya Gönder</button></a></td></tr>
                    {/foreach}
                    </tbody>
                {/if}
                {if isset($kargoya_verilecekler)}
                    <thead>
                    <tr><th width="80">ID</th><th>İsim Soyisim</th><th>Aldığı Ürün</th><th>Telefon/E-mail</th><th>Adres</th><th>Tarih</th><th>İşlem Yap</th></tr>
                    </thead>
                    <tbody>
                    {foreach from=$siparisler item=v}
                        <tr><td>{$v.siparis_id}</td><td>{$v.musteri_adsoyad}</td><td>{if $v.aldigi_urun_id eq 2}Calvin Klein Euphoria For Men(100ml){elseif $v.aldigi_urun_id eq 1}Calvin Klein Euphoria Women(100ml){else}{$v.aldigi_urun_id}{/if}<br/>adeti:{$v.notu}</td><td>{$v.musteri_telefon}<br/>{$v.email}</td><td>{$v.adres}</td><td>{$v.siparis_zamani}</td><td><button class="btn btn-primary" id="kargo" name="{$v.siparis_id}" onclick="barkod()">Kargoya Verildi</button></a></td></tr>
                    {/foreach}
                    </tbody>
                {/if}
                {if isset($iptal)}
                    <thead>
                    <tr><th width="80">ID</th><th>İsim Soyisim</th><th>Aldığı Ürün</th><th>Telefon/E-mail</th><th>Adres</th><th>Tarih</th></tr>
                    </thead>
                    <tbody>
                    {foreach from=$siparisler item=v}
                        <tr><td>{$v.siparis_id}</td><td>{$v.musteri_adsoyad}</td><td>{if $v.aldigi_urun_id eq 2}Calvin Klein Euphoria For Men(100ml){elseif $v.aldigi_urun_id eq 1}Calvin Klein Euphoria Women(100ml){else}{$v.aldigi_urun_id}{/if}<br/>adeti:{$v.notu}</td><td>{$v.musteri_telefon}<br/>{$v.email}</td><td>{$v.adres}</td><td>{$v.siparis_zamani}</td></tr>
                    {/foreach}
                    </tbody>
                {/if}
                {if isset($basarili)}
                    <thead>
                    <tr><th width="80">ID</th><th>İsim Soyisim</th><th>Aldığı Ürün</th><th>Telefon/E-mail</th><th>Adres</th><th>Tarih</th></tr>
                    </thead>
                    <tbody>
                    {foreach from=$siparisler item=v}
                        <tr><td>{$v.siparis_id}</td><td>{$v.musteri_adsoyad}</td><td>{if $v.aldigi_urun_id eq 2}Calvin Klein Euphoria For Men(100ml){elseif $v.aldigi_urun_id eq 1}Calvin Klein Euphoria Women(100ml){else}{$v.aldigi_urun_id}{/if}<br/>adeti:{$v.notu}</td><td>{$v.musteri_telefon}<br/>{$v.email}</td><td>{$v.adres}</td><td>{$v.siparis_zamani}</td></tr>
                    {/foreach}
                    </tbody>
                {/if}
            </table>
        </div>

    </div>
</div>
