<?php $this->load_fragment('skeleton_template/header', ['title' => __('Sponsors')]); ?>
<?php if (!$is_ajax): ?>
<article class="page open sponsors">
<?php endif; ?>
<?php
$sponsors2016 = [
    ['name' => 'Progress Software', 'image' => 'progress.jpg'],
];

$sponsors2015 = [
    ['name' => 'Ebay', 'image' => 'ebay.png'],
    ['name' => 'Freecharge', 'image' => 'freecharge.png'],
    ['name' => 'Line', 'image' => 'line.png'],
    ['name' => 'Lycos', 'image' => 'lycos.png'],
    ['name' => 'Manya Abroad', 'image' => 'manya.png'],
    ['name' => 'My Copie', 'image' => 'mycopie.png'],
    ['name' => 'NCR', 'image' => 'ncr.jpg'],
    ['name' => 'Progress', 'image' => 'progress.jpg'],
    ['name' => 'RedBull', 'image' => 'redbull.jpg'],
    ['name' => 'Shoppers Express', 'image' => 'shoppersexpress.png'],
    ['name' => 'State Bank of Hyderabad', 'image' => 'sbh.png'],
    ['name' => 'Technophilia', 'image' => 'technophilia.jpg'],
    ['name' => 'Unorthodox', 'image' => 'unorthodox.jpg'],
    ['name' => 'Wings Entertainment', 'image' => 'wingsentertainment.jpg']
];

$sponsors2014 = [
    ['name' => 'Capital IQ', 'image' => 'capitaliq.png'],
    ['name' => 'Coolage', 'image' => 'coolage.jpg'],
    ['name' => 'DLF', 'image' => 'dlf.png'],
    ['name' => 'Domino\'s', 'image' => 'dominos.png'],
    ['name' => 'Gigabyte', 'image' => 'gigabyte.png'],
    ['name' => 'Google', 'image' => 'google.png'],
    ['name' => 'Manya Education', 'image' => 'manya.png'],
    ['name' => 'Microsoft', 'image' => 'microsoft.png'],
    ['name' => 'Modi Properties', 'image' => 'modiproperties.png'],
    ['name' => 'Phoenix', 'image' => 'phoenix.jpg'],
    ['name' => 'Progress Software', 'image' => 'progress.jpg'],
    ['name' => 'Qualcomm', 'image' => 'qualcomm.jpg'],
    ['name' => 'Safe Express', 'image' => 'safeexpress.jpg'],
    ['name' => 'State Bank of Hyderabad', 'image' => 'sbh.png'],
    ['name' => 'Unorthodox', 'image' => 'unorthodox.jpg'],
];
?>
    <div class="container">
        <h2><?= __('Felicity 2016 Sponsors') ?></h2>
        <div class="row some-top-margin">
            <div class="col6 offset3">
                <img src="<?= base_url() ?>static/images/sponsors/qualcomm.jpg" alt="Qualcomm logo"/>
                <p>Title Sponsor</p>
            </div>
        </div>
        <div class="row some-top-margin">
            <div class="col4 container">
                <img src="<?= base_url() ?>static/images/sponsors/microsoft.png" alt="Microsoft Logo"/>
                <p><a class="underlined" href="<?= base_url() ?>threads/kings-of-ml/">Kings of ML</a> and <a class="underlined" href="<?= base_url() ?>threads/botomata/">Botomata</a> sponsor</p>
            </div>
            <div class="col4 container">
                <img src="<?= base_url() ?>static/images/sponsors/indeed.png" alt="Indeed Logo"/>
                <p>Nights Sponsor</p>
            </div>
            <div class="col4 container">
                <img src="<?= base_url() ?>static/images/sponsors/sbh.png" alt="SBH Logo"/>
                <p>Official Banking Partner</p>
            </div>
        </div>
        <div class="row some-top-margin">
            <div class="col3 container">
                <img src="<?= base_url() ?>static/images/sponsors/cornetto.png" alt="Cornetto Logo"/>
                <p>Official Snacking Partner</p>
            </div>
            <div class="col3 container">
                <img src="<?= base_url() ?>static/images/sponsors/9xm.png" alt="9XM Logo"/>
                <p>Powered By Partner</p>
            </div>
            <div class="col3 container">
                <img style="background-color: #0F69D6" src="<?= base_url() ?>static/images/sponsors/9xo.png" alt="9XO Logo"/>
                <p>Powered By Partner</p>
            </div>
            <div class="col3 container">
                <img src="<?= base_url() ?>static/images/sponsors/ccd.png" alt="CCD Logo"/>
                <p>Café Partners</p>
            </div>
        </div>
        <?php foreach (array_chunk($sponsors2016, 4) as $sponsors): ?>
            <div class="row some-top-margin">
                <?php foreach ($sponsors as $sponsor): ?>
                    <div class="col3 container">
                        <img src="<?= base_url() .'static/images/sponsors/'. $sponsor['image'] ?>" alt="<?= $sponsor['name'] ?> Logo" />
                        <p><?= $sponsor['name'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
        <h2><?= __('Past sponsors') ?></h2>
        <h3><?= __('Year 2015') ?></h3>
        <div class="row some-top-margin">
            <div class="col6 offset3">
                <img src="<?= base_url() ?>static/images/sponsors/qualcomm.jpg" alt="Qualcomm logo"/>
                <p>Qualcomm (Title Sponsor)</p>
            </div>
        </div>
        <div class="row some-top-margin">
            <div class="col4 container">
                <img src="<?= base_url() ?>static/images/sponsors/microsoft.png" alt="Microsoft Logo"/>
                <p>Microsoft</p>
            </div>
            <div class="col4 container">
                <img src="<?= base_url() ?>static/images/sponsors/acacian.png" alt="Acacia Logo"/>
                <p>Acacia</p>
            </div>
            <div class="col4 container">
                <img src="<?= base_url() ?>static/images/sponsors/fantasian.png" alt="Fantasian Logo"/>
                <p>Fantasian (Official Gaming Partner)</p>
            </div>
        </div>
        <?php foreach (array_chunk($sponsors2015, 4) as $sponsors): ?>
            <div class="row some-top-margin">
                <?php foreach ($sponsors as $sponsor): ?>
                    <div class="col3 container">
                        <img src="<?= base_url() .'static/images/sponsors/'. $sponsor['image'] ?>" alt="<?= $sponsor['name'] ?> Logo" />
                        <p><?= $sponsor['name'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
        <h3><?= __('Year 2014 and before') ?></h3>
        <?php foreach (array_chunk($sponsors2014, 4) as $sponsors): ?>
            <div class="row">
                <?php foreach ($sponsors as $sponsor): ?>
                    <div class="col3 container">
                        <img src="<?= base_url() .'static/images/sponsors/'. $sponsor['image'] ?>" alt="<?= $sponsor['name'] ?> Logo" />
                        <p><?= $sponsor['name'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php if (!$is_ajax): ?>
</article>
<?php endif; ?>
<?php $this->load_fragment('skeleton_template/footer'); ?>
