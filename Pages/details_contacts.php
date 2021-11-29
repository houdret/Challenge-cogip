<h1>Contact : Dwight Schrute</h1>

<div class="row">

    <div class="col-sm-8">
        <?php
        foreach (\App\Table\Contacts::getLast() as $post ): ?>

            <!--<h2>
                <a href="<?/*= $post->url */?>"><?/*= $post->titre; */?></a>,
            </h2>
            <p><em><?/*= $post->category; */?></em></p>
            <p><?/*= $post->extrait; */?></p>-->

        <?php endforeach; ?>

    </div>
    <p>Contact person for these invoices: </p>
    <div class="col-sm-8">
        <?php
        foreach (\App\Table\Invoices::getLast() as $post ): ?>

            <!--<h2>
                <a href="<?/*= $post->url */?>"><?/*= $post->titre; */?></a>,
            </h2>
            <p><em><?/*= $post->category; */?></em></p>
            <p><?/*= $post->extrait; */?></p>-->

        <?php endforeach; ?>

    </div>

</div>

