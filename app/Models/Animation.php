<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Animation extends Model
{
    /** @use HasFactory<\Database\Factories\AnimationFactory> */
    use HasFactory;

    public int    $id;
    public string $title;
    public string $description;
    public string $startDate;
    public string $endDate;
    public string $location;
    public string $website;

    public function __construct(int $id, string $title, string $description, string $startDate, string $endDate, string $location, string $website)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->location = $location;
        $this->website = $website;
    }

    public static function deserialize($dataArray)
    {
        $animations = [];
        foreach ($dataArray as $data) {
            $animation = new Animation($data['id'], $data['title'], $data['description'], $data['startDate'], $data['endDate'], $data['location'], $data['website'],);

            $animations[] = $animation;
        }
        return $animations;
    }

    /*
    public static function all()
    {
        $array = [
            [
                'id' => 0,
                'title' => 'Festival des casquettes',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus placerat aliquam finibus. Sed eget erat sagittis quam egestas egestas eu sed turpis. Curabitur placerat justo ante, et mollis justo aliquam auctor. Mauris volutpat quam vitae est tempus iaculis. Nulla eu sapien at dolor finibus suscipit eget ac diam. Quisque ut vestibulum ante. Quisque placerat nibh ipsum, quis facilisis ligula dictum quis. Sed non molestie magna. Phasellus commodo non libero non pharetra. Etiam sed lacus ut tortor sodales pretium sit amet in nunc. Donec vel porttitor sapien. Nullam hendrerit nulla mauris, vitae ultrices ipsum venenatis eget. Nulla sit amet tellus ac quam consectetur dapibus. Praesent ultricies vestibulum nisi, sed varius erat imperdiet ut. Nulla sollicitudin, nibh eget lobortis egestas, dolor diam sodales erat, at auctor urna mi nec arcu.',
                'startDate' => '2025-03-15',
                'endDate' => '2025-03-17',
                'location' => 'Château de Morges',
                'website' => 'https://chateau-morges.ch/le-chateau/',
            ],
            [
                'id' => 1,
                'title' => 'Inauguration du nouveau château',
                'description' => 'Mauris ut vestibulum massa. Sed pharetra ipsum ex, vitae laoreet est posuere sed. Nulla non lobortis enim. Morbi ac elit ac purus maximus consectetur. Ut sed orci gravida, vulputate eros eget, varius massa. Proin vehicula erat sit amet dolor vulputate faucibus. Fusce a lorem non mi malesuada pellentesque at in turpis. In vel leo felis. Morbi neque turpis, aliquet eget lacus et, faucibus auctor neque. Nam tristique interdum sodales. Aenean facilisis euismod felis eu fermentum. Quisque dui ante, euismod sit amet tempus quis, rutrum et dolor. Ut convallis aliquam leo, ut pulvinar purus sodales eget. Phasellus quis viverra nunc, ac auctor velit. Maecenas ornare, urna quis posuere vulputate, diam nibh imperdiet erat, ac congue eros quam eget urna. ',
                'startDate' => '2025-08-10',
                'endDate' => '2025-08-12',
                'location' => 'Château de Grandson',
                'website' => 'http://chateau-grandson.ch/',
            ],
            [
                'id' => 2,
                'title' => 'Weekend du forgeron',
                'description' => 'Fusce at enim sapien. Duis lobortis feugiat dignissim. In id porta ex. Donec faucibus tortor sem, vel pharetra nibh pulvinar eu. Praesent placerat nulla fringilla justo molestie lobortis. Nunc vitae nunc imperdiet, maximus dui a, mollis diam. Integer pharetra nisi at gravida scelerisque. Sed in posuere justo. Proin facilisis sodales augue, et pellentesque justo finibus sit amet. ',
                'startDate' => '2025-09-18',
                'endDate' => '2025-09-20',
                'location' => 'Musée du fer et du chemin de fer - Vallorbe',
                'website' => 'https://www.museedufer.ch/',
            ],
            [
                'id' => 3,
                'title' => 'Taxe du fer',
                'description' => 'Cras elementum placerat augue, ac rutrum leo placerat vel. Cras vestibulum est nec luctus rhoncus. Morbi ultricies dolor id venenatis porta. Morbi vel tincidunt mi. Nam eu accumsan tortor, vel porttitor ipsum. Aliquam est eros, varius sit amet luctus sollicitudin, pretium sed velit. Phasellus tempor sit amet sem ut pulvinar. Donec consequat auctor rhoncus. Mauris tempor volutpat diam. Aliquam et libero a augue pellentesque fringilla ut sed dui. Aenean interdum, mauris sed tincidunt ultrices, tortor arcu sodales lorem, ac faucibus velit sem vitae ante. Proin aliquam nisl sed justo porttitor tempor. Ut dictum dui massa, dapibus vestibulum quam consectetur non.',
                'startDate' => '2025-07-27',
                'endDate' => '2025-07-29',
                'location' => 'Château de Chillon',
                'website' => 'https://www.chillon.ch/',
            ],
        ];
        $animations = Animation::deserialize($array);
        return $animations;
    }
    */

    public static function find(int $id)
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
        if (!$job) {
            abort(404);
        } else {
            return $job;
        }
    }
}
