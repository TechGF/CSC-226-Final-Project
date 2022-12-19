import React from 'react';
import { CardMedia } from '@mui/material';

const GameCardMedia = ({ image, title, height, width }) => {
    return (
        <CardMedia
            component="img"
            alt={title}
            height={height}
            image={image}
            title={title}
            width={width}
        />
    );
}

export default GameCardMedia;