<?php

namespace App\Http\Resources;

use App\Models\Book;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StoreBookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'id' => $this->id,
            'store' => Store::findOrFail($this->store_id)->name,
            'book' => Book::findOrFail($this->book_id)->name,
        ];
    }
}
