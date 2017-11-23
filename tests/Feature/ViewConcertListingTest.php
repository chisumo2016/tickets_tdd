<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewConcertListingTest extends TestCase
{
    /**
     * A basic test Concert.
     *
     * @tesr
     */
    public function user_can_view_a_concert_listing()
    {
        //Arrange   1
           // Create a Concert
           $concert =  Concert ::create([

               'title'                   => 'The Red Chord',
               'subtitle'                => 'with Animosity and Lethargy',
               'date'                    => Carbon::parse('December 23, 2017 8:00pm'),
               'ticket_price'            =>3205,
               'venue'                   =>'The Marsh Pit',
               'venue_address'           =>'123 Example Lane',
               'city'                    => 'Laraville',
               'state'                   =>'ON',
               'zip'                     =>'1716',
               'additional_information'  =>'For tickets call (0555) 55555555'

           ]);
        //Act       2
        // View the concert Listing

           $this->visit('concerts/'.$concert->id);


        // Assert   3
        //
        // See the concert details

        $this->see('The Red Chord');
        $this->see('with Animosity and Lethargy');
        $this->see('December 23, 2017');
        $this->see('8:00pm');
        $this->see('32.05');
        $this->see('The Marsh Pi');
        $this->see('123 Example Lane');
        $this->see('Laraville, ON 1716');
        $this->see('For tickets call (0555) 55555555');
        
    }
}
