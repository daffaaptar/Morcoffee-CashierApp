<?php 
include 'layout/header.php';

?>

<section id="content">
        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>User</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Users</a>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Manage User</h3>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Create At</th>
                            <th>Update At</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="img/people.png">
                                <p>John Doe</p>
                            </td>
                            <td>01-10-2021</td>
                            <td>01-10-2021</td>
                            <td><span class="status completed">Cashier</span></td>
                            <td><span class="status process">Update</span></td>
                            
                        </tr>
                        <tr>
                            <td>
                                <img src="img/people.png">
                                <p>John Doe</p>
                            </td>
                            <td>01-10-2021</td>
                            <td>01-10-2021</td>
                            <td><span class="status pending">Admin</span></td>
                            <td><span class="status process">Update</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/people.png">
                                <p>Daffa</p>
                            </td>
                            <td>01-10-2021</td>
                            <td>01-10-2021</td>
                            <td><span class="status process">Owner</span></td>
                            <td><span class="status process">Update</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/people.png">
                                <p>John Doe</p>
                            </td>
                            <td>01-10-2021</td>
                            <td>01-10-2021</td>
                            <td><span class="status pending">Cashier</span></td>
                            <td><span class="status process">Update</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
        