<section>
        <article>
            <h2><a href="?page=film">Film (voir tout)</a></h2>
            <div>
                <div>
                    <a href="?page=film&action=detail&id=0"><img class="img" src="<?=$datas['film']->getDataById(0)['image']?>"></a>
                </div>
                <div>
                    <a href="?page=film&action=detail&id=1"><img class="img" src="<?=$datas['film']->getDataById(1)['image']?>"></a>
                </div>
                <div>
                    <a href="?page=film&action=detail&id=2"><img class="img" src="<?=$datas['film']->getDataById(2)['image']?>"></a>
                </div>
            </div>
        </article>

        <article>
            <h2><a href="?page=serie">Série (voir tout)</a></h2>
            <div>
                <div>
                    <a href="?page=serie&action=detail&id=0"><img class="img" src="<?=$datas['serie']->getDataById(0)['image']?>"></a>
                </div>
                <div>
                    <a href="?page=serie&action=detail&id=2"><img class="img" src="<?=$datas['serie']->getDataById(2)['image']?>"></a>
                </div>
                <div>
                    <a href="?page=serie&action=detail&id=1"><img class="img" src="<?=$datas['serie']->getDataById(1)['image']?>"></a>
                </div>
            </div>
        </article>
    
        <article>
            <h2><a href="?page=realisateur">Réalisateur (voir tout)</a></h2>
            <div>
                <div class="real">
                    <a href="?page=realisateur&action=detail&id=0"><img class="img" src="<?=$datas['real']->getDataById(0)['image']?>"></a>
                    <p>Quentin Tarantino.</p>
                </div>
                <div class="real">
                    <a href="?page=realisateur&action=detail&id=1"><img class="img" src="<?=$datas['real']->getDataById(1)['image']?>"></a>
                    <p>Steven Spielberg.</p>
                </div>
                <div class="real">
                    <a href="?page=realisateur&action=detail&id=2"><img class="img" src="<?=$datas['real']->getDataById(2)['image']?>"></a>
                    <p>Martin Scorsese.</p>
                </div>
            </div>
        </article>
</section>