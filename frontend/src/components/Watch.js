import React from "react";
import "./Watch.css";

export default function Watch(props) {
    console.log(props);

	return (
		<div className="Watch">
            <img src={`http://localhost:8000/storage/${props.watch.image_url}`}></img>
            <h2 className="Watch-brand">{props.watch.brand}</h2>
			<h1 className="Watch-name">{props.watch.name}</h1>
            <h3 className="Watch-price">${props.watch.price}</h3>
		</div>
	);
}
