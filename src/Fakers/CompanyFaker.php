<?php

namespace CodeTechNL\Faker\Fakers;

class CompanyFaker
{
    /**
     * Most powerful brands of 2020
     *
     * Source: https://tenetpartners.com/top100/most-powerful-brands-list.html
     *
     * @var array|string[]
     */
    public static array $companies = [
        'Apple Inc.',
        'Coca-Cola Company',
        'The Walt Disney Company',
        'PepsiCo Inc.',
        'Google-Alphabet',
        'Microsoft Corp.',
        'American Express Co',
        'Amazon.com Inc.',
        'International Business Machines',
        'Johnson & Johnson',
        'Facebook, Inc.',
        'Visa Inc.',
        'Mastercard Inc.',
        'The Hershey Company',
        'Campbell Soup',
        'General Mills',
        'eBay Inc.',
        'Kellogg Co.',
        'Twitter, Inc.',
        'Colgate-Palmolive',
        'Morgan Stanley',
        'Bank of America Corp',
        'Bristol-Myers Squibb',
        'Harley-Davidson',
        'Hilton Worldwide Holdings Inc',
        'Exxon Mobil Corp.',
        'Nike',
        'McDonald\'s Corp.',
        'General Electric',
        'Pfizer Inc.',
        'The Clorox Company',
        'AT&T Inc.',
        'Whirlpool Corp.',
        'Starbucks Corp.',
        'Ford Motor',
        'JPMorgan Chase & Co.',
        'Estee Lauder Cos.',
        'Procter & Gamble',
        'Mattel Inc.',
        'Capital One Financial',
        'JM Smucker',
        'CBS Corp.',
        'General Motors',
        'Intel Corp.',
        'Hewlett Packard Enterprise',
        'American Airlines Group',
        'DuPont de Nemours Inc',
        'Netflix Inc.',
        'Charles Schwab Corporation',
        'FedEx Corporation',
        'Marriott Int\'l.',
        'Target Corp.',
        'Chevron Corp.',
        'Kraft Heinz Co',
        'Walmart',
        'United Parcel Service',
        'Gap Inc.',
        'Verizon Communications',
        'Ralph Lauren Corporation',
        'Royal Caribbean Cruises Ltd',
        'Home Depot',
        'Lowe\'s Cos.',
        'Sherwin-Williams',
        'Delta Air Lines Inc.',
        'Best Buy Co. Inc.',
        'Hanesbrands Inc',
        'Macy\'s Inc.',
        'Tiffany & Co.',
        'Stanley Black & Decker',
        'HP Inc.',
        'Kohl\'s Corp.',
        'Western Union Co',
        'Tyson Foods',
        'Boeing Company',
        'Walgreens Boots Alliance',
        'CVS Health',
        'Costco Wholesale Corp.',
        'Foot Locker Inc',
        'Allstate Corp',
        'Xerox',
        'United Technologies',
        'Carnival Corp.',
        'McCormick & Co.',
        'Lockheed Martin Corp.',
        'Dollar General',
        'Citigroup Inc.',
        'Wells Fargo',
        'Southwest Airlines',
        'Chipotle Mexican Grill',
        'Goldman Sachs Group',
        'Comcast Corp.',
        'Molson Coors Brewing Company',
        'Dish Network',
        'Dollar Tree',
        'Dow Inc.',
        'PayPal',
        'General Dynamics',
        'Ulta Beauty',
        'Fox Corporation',
        'MetLife Inc.',
    ];

    /**
     * @return string
     */
    public function __invoke(): string
    {
        $index = array_rand(self::$companies);

        return self::$companies[$index];
    }
}
