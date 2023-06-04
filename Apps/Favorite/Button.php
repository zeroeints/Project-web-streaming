<!DOCTYPE html>
<html>

<head>
    <title>Like Button</title>
    <style>
        .like-button {
            display: inline-block;
            background-color: #f1f1f1;
            border: none;
            color: #555555;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .like-button:hover {
            background-color: #dddddd;
        }

        .like-button .like-icon {
            display: inline-block;
            vertical-align: middle;
            width: 20px;
            height: 20px;
            background-color: #f1f1f1;
            background-image: url('../../img/Like.png');
            background-size: cover;
            background-repeat: no-repeat;
            transition: transform 0.3s ease;
        }

        .like-button.liked {
            background-color: orange;
            color: #ffffff;
        }

        .like-button.liked .like-icon {
            background-color: orange;
            background-image: url('../../img/Like.png');
            transform: scale(1.2);
        }
    </style>
</head>

<body>
    <button class="like-button" onclick="toggleLike()">
        <span class="like-icon"></span>
        Like
    </button>

    <script>
        var isLiked = false;

        function toggleLike() {
            var likeButton = document.querySelector('.like-button');
            var likeIcon = document.querySelector('.like-icon');

            isLiked = !isLiked;

            if (isLiked) {
                likeButton.classList.add('liked');
                likeIcon.style.transform = 'scale(1.2)';
            } else {
                likeButton.classList.remove('liked');
                likeIcon.style.transform = 'none';
            }
        }
    </script>
</body>

</html>