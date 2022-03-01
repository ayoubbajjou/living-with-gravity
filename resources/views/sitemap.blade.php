<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://bike.livingwithgravity.com/</loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
    </url>
    <url>
        <loc>https://bike.livingwithgravity.com/blog</loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
    </url>
    <url>
        <loc>https://bike.livingwithgravity.com/about-us</loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
    </url>
    @foreach($brands as $brand)
        <url>
            <loc>https://bike.livingwithgravity.com/{{ $brand->brand_name }}</loc>
            <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    @foreach($bikes as $bike)
        <url>
            <loc>https://bike.livingwithgravity.com/{{ $bike->make }}/{{ Str::slug($bike->series) }}/{{ $bike->version_name }}</loc>
            <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    @foreach($brands as $brand)
        <url>
            <loc>https://bike.livingwithgravity.com/all-bikes/{{ $brand->brand_name }}</loc>
            <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    <url>
        <loc>https://bike.livingwithgravity.com/search/displacement{{'?up=0&under=100'}}</loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
    </url>
    <url>
        <loc>https://bike.livingwithgravity.com/search/displacement{{'?up=100&under=110'}}</loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
    </url>
    <url>
        <loc>https://bike.livingwithgravity.com/search/displacement{{'?up=110&under=125'}}</loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
    </url>
    <url>
        <loc>https://bike.livingwithgravity.com/search/displacement{{'?up=125&under=150'}}</loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
    </url>
    <url>
        <loc>https://bike.livingwithgravity.com/search/displacement{{'?up=150&under=200'}}</loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
    </url>
    <url>
        <loc>https://bike.livingwithgravity.com/search/displacement{{'?up=200&under=250'}}</loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
    </url>
    <url>
        <loc>https://bike.livingwithgravity.com/search/displacement{{'?up=500&under=750'}}</loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
    </url>
    <url>
        <loc>https://bike.livingwithgravity.com/search/displacement{{'?up=750&under=1000'}}</loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
    </url>
    <url>
        <loc>https://bike.livingwithgravity.com/search/displacement{{'?up=1000&under=10000000000'}}</loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
    </url>
    <url>
        <loc>https://bike.livingwithgravity.com/search/budget/50000</loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
    </url>
    <url>
        <loc>https://bike.livingwithgravity.com/search/budget/60000</loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
    </url>
    <url>
        <loc>https://bike.livingwithgravity.com/search/budget/70000</loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
    </url>
    <url>
        <loc>https://bike.livingwithgravity.com/search/budget/80000</loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
    </url>
    <url>
        <loc>https://bike.livingwithgravity.com/search/budget/100000</loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
    </url>
    <url>
        <loc>https://bike.livingwithgravity.com/search/budget/150000</loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
    </url>
    <url>
        <loc>https://bike.livingwithgravity.com/search/budget/200000</loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
    </url>
    <url>
        <loc>https://bike.livingwithgravity.com/search/budget/250000</loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
    </url>
    <url>
        <loc>https://bike.livingwithgravity.com/search/budget/300000</loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
    </url>
    <url>
        <loc>https://bike.livingwithgravity.com/search/budget/300001</loc>
        <lastmod><?php echo date('c', time()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
    </url>
</urlset>