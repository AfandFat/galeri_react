import { Routes, Route } from "react-router-dom";

import Home from '../pages/Home.js';
import About from '../pages/About.js';
import Contact from '../pages/Contact.js';
import Album from '../pages/Album.js';
import AlbumCreate from '../pages/AlbumCreate.js';
import AlbumEdit from '../pages/AlbumEdit.js';
import User from '../pages/User.js';
import UserCreate from '../pages/UserCreate.js';
import UserEdit from '../pages/UserEdit.js';

function MyRouter() {

    return (
        <Routes>
            <Route path="/" element={<Home />} />
            <Route path="/about-us" element={<About />} />
            <Route path="/contact-us" element={<Contact />} />
            <Route path="/albums" element={<Album />} />
            <Route path="/albums/create" element={<AlbumCreate />} />
            <Route path="albums/:id/edit" element={<AlbumEdit />} />
            <Route path="/users" element={<User />} />
            <Route path="/users/create" element={<UserCreate />} />
            <Route path="users/:id/edit" element={<UserEdit />} />
           
        </Routes>
    )

}

export default MyRouter;