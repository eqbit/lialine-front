<? require "../init.php";

switch ($_POST["type"]) {
    case "getCountries":
        echo json_encode(get_resorts($_POST["country"]));
        break;
        
    case "getEMapData":
        echo json_encode([
            "coordinates" => [46.218266, 10.822382],
            "resorts" => [
                [
                    "title" => "Мадонна ди Кампильо",
                    "price" => "от 749 €",
                    "coordinates" => [46.218266, 10.822382],
                    "link" => "#"
                ],
                [
                    "title" => "Мадонна ди Кампильо",
                    "price" => "от 759 €",
                    "coordinates" => [46.218266, 14.822382],
                    "link" => "#"
                ],
                [
                    "title" => "Мадонна ди Кампильо",
                    "price" => "от 759 €",
                    "coordinates" => [45.218266, 13.822382],
                    "link" => "/"
                ]
            ]
        ]);
        break;
        
    case "handleForm":
        echo json_encode(["status" => "success"]);
}

die();