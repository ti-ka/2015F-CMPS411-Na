<?php

namespace App\Events;


use Framework\DB;
use Framework\Social\FacebookUtils;
use Framework\Storage\File;

class Event
{

    public static $imageUploadDir = "assets/uploads/events";
    public
        $eventId,
        $title, $description, $metaContent, $slug, $coverPhoto, $place, $dateTime,
        $author;

    public function title($title){
        $this->title = $title;
        return $this;
    }
    public function description($description){
        $this->description = $description;
        return $this;
    }
    public function metaContent($metaContent){
        $this->description = $metaContent;
        return $this;
    }
    public function slug($slug){
        $this->slug = $slug;
        return $this;
    }
    public function place($place){
        $this->place = $place;
        return $this;
    }

    public function dateTime($dateTime){
        $this->dateTime = $dateTime;
        return $this;
    }

    public function __construct($eventId = null){
        if($eventId != null){
            $events = DB::get("events",["eventId" => $eventId],null,null,"App\\Events\\Event");
            if(count($events) === 1){
                $post = $events[0];
                $this->eventId = $post->eventId;
                $this->title = $post->title;
                $this->description = $post->description;
                $this->metaContent = $post->metaContent;
                $this->coverPhoto = $post->coverPhoto;
                $this->slug = $post->slug;
                $this->place = $post->place;
                $this->dateTime = new \DateTime($post->dateTime);
                unset($events);
            }
        }

        $this->metaContent = $this->description;
    }

    public function getFromSlug($slug){

        $events = DB::get("events",["slug" => $slug],1,null,"App\\Events\\Event");

        if(count($events) === 1){
            $post = $events[0];
            $this->eventId = $post->eventId;
            $this->title = $post->title;
            $this->description = $post->description;
            $this->coverPhoto = $post->coverPhoto;
            $this->metaContent = $post->metaContent;
            $this->slug = $post->slug;
            $this->slug = $post->slug;
            $this->place = $post->place;
            $this->dateTime = new \DateTime($post->dateTime);
            unset($events);
        }


        return $this;
    }

    public function getDate(){
        return $this->dateTime->format("M d, Y @ h:ia");
    }

    public function save(){

        if($this->slug == null){
            $this->slug = $this->makeSlug();
        }

        $postData = [
            "title" => $this->title,
            "slug" => $this->slug,
            "place" => $this->place,
            "dateTime" => $this->dateTime->format("Y-m-d h:i:s a"),
            "description" => $this->description,
        ];

        if(File::isFileUploaded()){
            $uploads = File::uploadFiles(self::$imageUploadDir);

            if(count($uploads)){
                $postData["coverPhoto"] = $uploads[0];
            }
        }

        if($this->eventId == null){
            /*
            while(DB::exists("events",["slug" => $this->slug])){
                $this->slug = $this->slug . rand(0,100);
            }
            */
            $success = $this->addNewEvent($postData);
            $this->eventId = DB::lastInsertedId();
            return $success;
        } else {
            return $this->updateEvent($postData);
        }

    }

    public function deleteEvent($slug){
        return DB::delete("events",["slug" => $slug]);
    }

    private function addNewEvent($postData){
        if(DB::insert("events",$postData)){

            $fb = new FacebookUtils();

            $fb->status($this->title)
                ->link(BASE_URL."events/".$this->slug)
                ->post();
            return true;
        } else {
            return false;
        }
    }

    private function updateEvent($postData){
        $params = ["eventId" => $this->eventId];

        if(DB::update("events",$postData, $params)){
            return true;
        } else {
            return false;
        }

    }

    public function makeSlug(){
        $slug = strtolower($this->title);
        $slug = str_replace(" ","-",$slug);
        $slug = preg_replace("/[^a-z0-9-]+/", "", $slug);
        $slug = ltrim($slug,"-");
        $slug = rtrim($slug,"-");
        return $slug;
    }

}