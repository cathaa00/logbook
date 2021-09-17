<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LogbookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

    return [
     'id' => $this->id,
     'nim' => $this->nim,
     'nama' => $this->nama,
     'tanggal' => $this->tanggal,
     'unit_kerja' => $this->unit_kerja,
     'kegiatan' => $this->kegiatan,
     'mulai' => $this->mulai,
     'selesai' => $this->selesai,
     'catatan' => $this->catatan,
     'created_at' => $this->created_at,
     'updated_at' => $this->updated_at,
  ];
    }
}
