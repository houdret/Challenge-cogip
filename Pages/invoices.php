<h1>COGIP : List of invoices</h1>

<div class="row">

    <div class="col-sm-8">
        <?php
        foreach (\App\Table\Invoice::getLast() as $post ): ?>

            <!--<h2>
                <a href="<?/*= $post->url */?>"><?/*= $post->titre; */?></a>,
            </h2>
            <p><em><?/*= $post->category; */?></em></p>
            <p><?/*= $post->extrait; */?></p>-->

        <?php endforeach; ?>

    </div>

</div>

