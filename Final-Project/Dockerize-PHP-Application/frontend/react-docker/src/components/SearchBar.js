import React from 'react';
import { useState } from 'react';
import Button from '@mui/material/Button';
import TextField from '@mui/material/TextField';
import { Card, CardMedia, CardContent } from '@mui/material';
import './Style.css';
import StarRating from "./StarRating";

function SearchBar() {
    const [query, setQuery] = useState('');
    const [results, setResults] = useState([]);

    const handleChange = (event) => {
        setQuery(event.target.value);
    };

    const handleSubmit = (event) => {
        event.preventDefault();

        fetch(`http://localhost/api/read.php?key=5599d030de7e4967846d6e1d6c7ed036&search_precise=true&search_exact=true&search=${query}`)
            .then(response => response.json())
            .then(json => {
                setResults(json.results);
            });
    };

    const handleReset = () => {
        setResults([]);
        setQuery('');
    };

    return (
        <form onSubmit={handleSubmit} noValidate autoComplete="off">
            <TextField id="outlined-basic" label="Searching your game..." variant="outlined" value={query} onChange={handleChange} />
            <div style={{ paddingTop: '0.5rem' }}>
                <Button variant="contained" type="submit">Search</Button>
                &nbsp;&nbsp;&nbsp;
                <Button variant="contained" type="button" onClick={handleReset}>Reset</Button>
            </div>

            <div style={{ paddingTop: '1.5rem', paddingLeft: '1rem', paddingRight: '1rem', paddingBottom: '1rem' }}>
                {results.length > 0 && (
                    <div class="grid">
                        {results.map(result => (
                            <Card key={result.id}>
                                <CardMedia
                                    component="img"
                                    alt={result.name}
                                    height="150"
                                    image={result.background_image}
                                    title={result.name}
                                    width="200"
                                />
                                <CardContent>
                                    <h3>{result.name}</h3>
                                    <StarRating rating={result.rating} />
                                    <h5>Released: {result.released}</h5>
                                </CardContent>
                            </Card>
                        ))}
                    </div>
                )}
            </div>
        </form>
    );
}

export default SearchBar;