import scrapy
# from Star import Star


class StarsSpider(scrapy.Spider):

    name = 'stars'
    start_urls = [ 'https://en.wikipedia.org/wiki/List_of_stars_in_Andromeda']

    # def parse(self, response):
    #     for href in response.css('table.multicol').css('li').css('a::attr(href)').extract():
    #         yield scrapy.Request(response.urljoin(href), callback=self.parse_star)
    #
    def parse(self, response):
        for url in response.css('table.wikitable').css('tr').css('a::attr(href)').extract():
            yield scrapy.Request(response.urljoin(url), callback=self.parse_star)

    def parse_star(self, response):
        name = response.css('h1#firstHeading.firstHeading::text').extract()
        for member in response.css('table.infobox').css('tr'):
            value = member.css('td').css('a::text').extract()
            proper = member.css('th').css('a::text').extract()
            if len(value) != 1:
                value = member.css('td::text').extract()
            if len(proper) !=1:
                proper =member.css('th::text').extract()
            if len(value) == 0 or len(proper) == 0:
                continue
            yield{
                'name': name,
                'property': proper,
                'value': value,

            }
