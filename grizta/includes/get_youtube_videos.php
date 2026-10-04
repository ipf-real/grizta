<?php
// function getLatestYoutubeVideos(string $channelId, int $limit = 3): array
// {
//     $cacheFile = __DIR__ . '/../cache/youtube_cache.json';
//     $cacheTime = 3600; 

//     if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < $cacheTime)) {
//         $cached = json_decode(file_get_contents($cacheFile), true);
//         if (!empty($cached)) {
//             return $cached;
//         }
//     }

//     $feedUrl = "https://www.youtube.com/feeds/videos.xml?channel_id={$channelId}";
//     $videos  = [];

//     try {
//         $context = stream_context_create(['http' => ['timeout' => 5]]);
//         $xmlData = @file_get_contents($feedUrl, false, $context);

//         if ($xmlData === false) {
//             return $videos; 
//         }

//         $xml = simplexml_load_string($xmlData);
//         $xml->registerXPathNamespace('yt', 'http://www.youtube.com/xml/schemas/2015');
//         $xml->registerXPathNamespace('media', 'http://search.yahoo.com/mrss/');

//         $entries = $xml->entry;

//         foreach ($entries as $entry) {
//             if (count($videos) >= $limit) {
//                 break;
//             }

//             $ytNamespace    = $entry->children('http://www.youtube.com/xml/schemas/2015');
//             $mediaNamespace = $entry->children('http://search.yahoo.com/mrss/');
//             $mediaGroup     = $mediaNamespace->group;

//             $videos[] = [
//                 'id'        => (string) $ytNamespace->videoId,
//                 'title'     => (string) $entry->title,
//                 'thumbnail' => (string) $mediaGroup->thumbnail->attributes()->url,
//                 'url'       => (string) $entry->link->attributes()->href,
//             ];
//         }

//         if (!empty($videos)) {
//             if (!is_dir(__DIR__ . '/../cache')) {
//                 mkdir(__DIR__ . '/../cache', 0755, true);
//             }
//             file_put_contents($cacheFile, json_encode($videos));
//         }
//     } catch (Exception $e) {
//     }

//     return $videos;
// }

function getLatestYoutubeVideos(string $channelId, int $limit = 3): array
{
    $cacheFile = __DIR__ . '/../cache/youtube_cache.json';
    $cacheTime = 3600;

    if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < $cacheTime)) {
        $cached = json_decode(file_get_contents($cacheFile), true);
        if (!empty($cached)) {
            return $cached;
        }
    }

    $feedUrl = "https://www.youtube.com/feeds/videos.xml?channel_id={$channelId}";
    $videos  = [];

    $ch = curl_init($feedUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 8);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
    $xmlData = curl_exec($ch);
    $curlError = curl_error($ch);
    curl_close($ch);

    if ($xmlData === false || empty($xmlData)) {
        if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < $cacheTime)) {
            $cached = json_decode(file_get_contents($cacheFile), true);
            if (!empty($cached) && count($cached) >= $limit) {
                return array_slice($cached, 0, $limit);
            }
        }
        return $videos;
    }

    try {
        $xml = simplexml_load_string($xmlData);
        $entries = $xml->entry;

        foreach ($entries as $entry) {
            if (count($videos) >= $limit) {
                break;
            }

            $ytNamespace    = $entry->children('http://www.youtube.com/xml/schemas/2015');
            $mediaNamespace = $entry->children('http://search.yahoo.com/mrss/');
            $mediaGroup     = $mediaNamespace->group;

            $videos[] = [
                'id'        => (string) $ytNamespace->videoId,
                'title'     => (string) $entry->title,
                'thumbnail' => (string) $mediaGroup->thumbnail->attributes()->url,
                'url'       => (string) $entry->link->attributes()->href,
            ];
        }

        if (!empty($videos)) {
            if (!is_dir(__DIR__ . '/../cache')) {
                mkdir(__DIR__ . '/../cache', 0755, true);
            }
            file_put_contents($cacheFile, json_encode($videos));
        }
    } catch (Exception $e) {
    }

    return $videos;
}
