<h1>COGIP : Companies Directory</h1>

<div class="row">
    <h2>Clients </h2>
    <div class="col-sm-8">
        <?php
        foreach (\App\Table\Companies::getLast() as $post ): ?>

            <!--<h2>
                <a href="<?/*= $post->url */?>"><?/*= $post->titre; */?></a>,
            </h2>
            <p><em><?/*= $post->category; */?></em></p>
            <p><?/*= $post->extrait; */?></p>-->

        <?php endforeach; ?>

    </div>
    <h2>Suppliers </h2>
    <div class="col-sm-8">
        <?php
        foreach (\App\Table\Companies::getLast() as $post ): ?>

            <!--<h2>
                <a href="<?/*= $post->url */?>"><?/*= $post->titre; */?></a>,
            </h2>
            <p><em><?/*= $post->category; */?></em></p>
            <p><?/*= $post->extrait; */?></p>-->

        <?php endforeach; ?>

    </div>
</div>

