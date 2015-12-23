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
                {if isset($mesajlar)}
                    <thead>
                    <tr><th width="80">ID</th><th>İsim Soyisim</th><th>Email</th><th>Mesaj</th></tr>
                    </thead>
                    <tbody>
                    {foreach from=$mesajlar item=v key=k}
                        <tr><td>{$v.id}</td><td>{$v.isim}</td><td>{$v.email}</td><td>Konu : {$v.konu}<br/>Mesaj:{$v.mesaj}</td></tr>
                    {/foreach}
                    </tbody>
                {/if}
                {if isset($son_hareketler)}
                    <thead>
                    <tr><th width="80">ID</th><th>Hareket</th></tr>
                    </thead>
                    <tbody>
                    {foreach from=$son_hareketler item=v}
                        <tr><td>{$v.id}</td><td>{$v.hareket}</td></tr>
                    {/foreach}
                    </tbody>
                {/if}
            </table>
        </div>

    </div>
</div>
