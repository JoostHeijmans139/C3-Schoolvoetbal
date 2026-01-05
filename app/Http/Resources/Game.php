<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Game extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'tournament' => $this->tournament,
            'start' => $this->start,
            'duration_in_minutes' => $this->duration_in_minutes,
            'team_1' => $this->team1,
            'team_2' => $this->team2,
            'score_team_1' => $this->score_team_1,
            'score_team_2' => $this->score_team_2,
        ];
    }
}
