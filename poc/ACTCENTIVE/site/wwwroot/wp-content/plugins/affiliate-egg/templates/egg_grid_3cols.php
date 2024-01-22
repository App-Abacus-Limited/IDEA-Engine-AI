<?phpdefined('\ABSPATH') || exit;/*  Name: Grid (3 colums) */__('Grid (3 colums)', 'affegg-tpl');use Keywordrush\AffiliateEgg\TemplateHelper;?><?php $this->enqueueStyle(); ?><div class="egg-container egg-grid">    <div class="container-fluid">        <?php $i = 0; ?>        <div class="row">            <?php foreach ($items as $item): ?>                <div class="col-md-4 col-xs-6 cegg-gridbox">                    <a rel="nofollow" target="_blank" href="<?php echo esc_url($item['url']) ?>"<?php echo $item['ga_event'] ?>>                        <div class="cegg-thumb">                            <?php if ($item['discount_perc']): ?>                                <div class="cegg-promotion">                                    <span class="cegg-discount">- <?php echo round($item['discount_perc']); ?>%</span>                                </div>                            <?php endif; ?>                            <?php if ($item['img']): ?>                                <img src="<?php echo esc_attr($item['img']) ?>" alt="<?php echo esc_attr($item['title']); ?>" />                            <?php endif; ?>                        </div>                        <div class="producttitle">                            <div class="cegg-mb10">                                <img src="<?php echo esc_attr(TemplateHelper::getMerhantIconUrl($item, false)); ?>" /> <small><?php echo $item['domain']; ?></small>                            </div>                            <?php if (!empty($item['extra']['rating'])): ?>                                <div class="cegg-title-rating">                                    <?php echo TemplateHelper::printRating($item, 'small'); ?>                                </div>                            <?php endif; ?>                            <?php echo esc_html(TemplateHelper::truncate($item['title'], 80)); ?><?php if ($item['manufacturer'] && mb_strlen($item['title'], 'utf-8') < 80): ?>, <?php echo esc_html($item['manufacturer']); ?><?php endif; ?>                        </div>                        <div class="productprice">                            <?php if ($item['price']): ?>                                <?php if ($item['old_price']): ?><strike class="text-muted"><?php echo TemplateHelper::formatPriceCurrency($item['old_price_raw'], $item['currency_code'], '<small>', '</small>'); ?></strike>&nbsp;<?php endif; ?>                                <span class="cegg-price cegg-price-color"><?php echo TemplateHelper::formatPriceCurrency($item['price_raw'], $item['currency_code']); ?></span>                            <?php endif; ?>                        </div>                        <div class="cegg-btn-grid cegg-hidden hidden-xs">                            <a rel="nofollow" target="_blank" href="<?php echo $item['url']; ?>" class="btn btn-danger"<?php echo $item['ga_event'] ?>><?php TemplateHelper::buyNowBtnText(true, $item); ?></a>                        </div>                    </a>                </div>                <?php                $i++;                if ($i % 3 == 0)                    echo '<div class="clearfix hidden-xs"></div>';                if ($i % 2 == 0)                    echo '<div class="clearfix visible-xs-block"></div>';                ?><?php endforeach; ?>        </div><?php if ($see_more_uri): ?>            <div class="row">                <div class="col-md-12 text-center">                    <hr>                    <a class="btn btn-info" rel="nofollow" target="_blank" href="<?php echo $see_more_uri; ?>"><?php _e('See more...', 'affegg-tpl'); ?></a>                </div>            </div><?php endif; ?>    </div></div>