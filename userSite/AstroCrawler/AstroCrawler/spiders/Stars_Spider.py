import scrapy


class StarsSpider(scrapy.Spider):

    name = 'Stars'

    def __init__(self, query=None, *args, **kwargs):
        super(StarsSpider, self).__init__(*args, **kwargs)
        self.start_urls = [
            'https://www.google.com/search?as_epq=%s&ie=utf-8&oe=utf-8' %query
            ]

    def parse(self, response):
        #response = response.css('div.srg')
        for href in response.css('div.g').css('a:attr(href)').extract():
            yield scrapy.Request(response.urljoin(href), callback=self.parse_page)

    def parse_page(self, response):
        for paragraph in response.css('p'):
            yield{
                'paragraph' : paragraph.css('p::text').extract()
            }
