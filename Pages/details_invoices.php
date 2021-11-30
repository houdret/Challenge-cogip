<h1>Invoices : F20190404-004</h1>

<div class="row">
    <h3>Company linked to the invoice</h3>
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
    <h3>Contact person</h3>
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

</div>

