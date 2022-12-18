import React from 'react';

export default function StarRating(props) {
    const rating = props.rating;
    const numFullStars = Math.floor(rating);
    const numEmptyStars = 5 - numFullStars;

    return (
        <div className="star-rating">
            {[...Array(numFullStars)].map((_, i) => (
                <span key={i} className="full-star">
          &#9733;
        </span>
            ))}
            {[...Array(numEmptyStars)].map((_, i) => (
                <span key={i} className="empty-star">
          &#9734;
        </span>
            ))}
        </div>
    );
}

