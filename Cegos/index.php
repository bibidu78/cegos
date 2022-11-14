<section class=" cegos wp-block-cegos-cegos-page-section page-section page-section__container">
    <div class="CegosServices">
    <?php foreach ([
            [
                "class" => 'center',
                "logo" => 'cegos',
            ],
            [
                "class" => "center cover",
                "logo" => 'cegos',
                "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe corrupti doloribus dolores suscipit vero eaque.",
                "img" => 'https://static3.cegos.fr/content/uploads/2022/04/29170109/Medecin-directeur-de-projet-Mag-min.jpg'
            ], ["class" => ""]
        ] as $key => $value) : ?>
        <div class="CegosServices__item <?= $value["class"] ?? "" ?>" style="--background: url(https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2.jpg)">
            <div class="CegosServices__item-image" data-image="<?= $value['logo'] ?? "false" ?>">
                <picture>
                    <source srcset="https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2.jpg.webp 1167w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-1024x576.jpg.webp 1024w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-768x432.jpg.webp 768w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-640x360.jpg.webp 640w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-320x180.jpg.webp 320w" sizes="(min-width:1167px) 1167px" type="image/webp"><img src="https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2.jpg" alt="thumbnail image" srcset="https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2.jpg 1167w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-1024x576.jpg 1024w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-768x432.jpg 768w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-640x360.jpg 640w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-320x180.jpg 320w" sizes="(min-width:1167px) 1167px" loading="lazy">
                </picture>
                <div class="CegosServices__item-image-logo"> logo </div>
            </div>
            <div class="CegosServices__item-group">
                <div class="CegosServices__item-content">
                    <div>
                        <h4> Accompagner les compétences impactées par vos transformations </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe corrupti doloribus dolores suscipit vero eaque, aspernatur consequatur.</p>
                    </div>
                </div>
                <div class="CegosServices__item-cta">
                    <div class="cta-primary red">
                        Découvrir
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="CegosServices ressources">
        <?php foreach ([
            [
                "class" => "cover center",
                "text" => "Lorem ipsum dolor sit amet",
                "img" => 'https://static3.cegos.fr/content/uploads/2022/04/29170109/Medecin-directeur-de-projet-Mag-min.jpg'
            ],
            [
                "class" => "cover center",
                "text" => "Lorem ipsum dolor sit amet",
                "img" => 'https://static3.cegos.fr/content/uploads/2022/04/29170109/Medecin-directeur-de-projet-Mag-min.jpg'
            ],
            [
                "class" => "cover center",
                "text" => "Lorem ipsum dolor sit amet",
                "img" => 'https://static3.cegos.fr/content/uploads/2022/04/29170109/Medecin-directeur-de-projet-Mag-min.jpg'
            ],
            [
                "class" => "cover center",
                "text" => "Lorem ipsum dolor sit amet",
                "img" => 'https://static3.cegos.fr/content/uploads/2022/04/29170109/Medecin-directeur-de-projet-Mag-min.jpg'
            ],
            [
                "class" => "cover center",
                "text" => "Lorem ipsum dolor sit amet",
                "img" => 'https://static3.cegos.fr/content/uploads/2022/04/29170109/Medecin-directeur-de-projet-Mag-min.jpg'
            ]
        ] as $key => $value) : ?>
            <div class="CegosServices__item <?= $value["class"] ?? "" ?>" style="--background: url(<?= $value["img"] ?? "https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2.jpg" ?>)">
                <div class="CegosServices__item-image" data-image="<?= $value['logo'] ?? "false" ?>">
                    <picture>
                        <source srcset="https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2.jpg.webp 1167w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-1024x576.jpg.webp 1024w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-768x432.jpg.webp 768w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-640x360.jpg.webp 640w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-320x180.jpg.webp 320w" sizes="(min-width:1167px) 1167px" type="image/webp"><img src="https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2.jpg" alt="thumbnail image" srcset="https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2.jpg 1167w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-1024x576.jpg 1024w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-768x432.jpg 768w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-640x360.jpg 640w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-320x180.jpg 320w" sizes="(min-width:1167px) 1167px" loading="lazy">
                    </picture>
                    <div class="CegosServices__item-image-logo"> logo </div>
                </div>
                <div class="CegosServices__item-content">
                    <div>
                        <h4> blog </h4>
                        <p><?= $value['text'] ?? 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe corrupti doloribus dolores suscipit vero eaque, aspernatur consequatur.' ?></p>
                    </div>
                </div>
                <!-- <div class="CegosServices__item-cta">
                    <div class="cta-primary red">
                        Découvrir
                    </div>
                </div> -->
            </div>
        <?php endforeach; ?>
    </div>
    <div class="CegosServices references">
        <?php foreach ([
            [
                "class" => 'center',
                "logo" => 'cegos',
            ],
            [
                "class" => "center",
                "logo" => 'cegos',
                "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe corrupti doloribus dolores suscipit vero eaque.",
                "img" => 'https://static3.cegos.fr/content/uploads/2022/04/29170109/Medecin-directeur-de-projet-Mag-min.jpg'
            ], ["class" => ""]
        ] as $key => $value) : ?>
            <div class="CegosServices__item <?= $value["class"] ?? "" ?>" style="--background: url(<?= $value["img"] ?? "https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2.jpg" ?>)">
                <div class="CegosServices__item-image" data-image="<?= $value['logo'] ?? "false" ?>">
                    <picture>
                        <source srcset="https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2.jpg.webp 1167w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-1024x576.jpg.webp 1024w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-768x432.jpg.webp 768w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-640x360.jpg.webp 640w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-320x180.jpg.webp 320w" sizes="(min-width:1167px) 1167px" type="image/webp"><img src="https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2.jpg" alt="thumbnail image" srcset="https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2.jpg 1167w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-1024x576.jpg 1024w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-768x432.jpg 768w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-640x360.jpg 640w,https://static3.cegos.fr/content/uploads/2022/09/15153716/Sans-titre-2-320x180.jpg 320w" sizes="(min-width:1167px) 1167px" loading="lazy">
                    </picture>
                    <div class="CegosServices__item-image-logo"> logo </div>
                </div>
                <div class="CegosServices__item-group">
                    <div class="CegosServices__item-content">
                        <div>
                            <h4> Accompagner les compétences</h4>
                            <p><?= 'Lorem ipsum dolor sit amet' ?></p>
                        </div>
                    </div>
                    <div class="CegosServices__item-cta">
                        <div class="cta-primary red">
                            Découvrir
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>