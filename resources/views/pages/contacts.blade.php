@extends('layouts.admin')

@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Contacts</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Contacts</a></li>
                            <li class="breadcrumb-item active">All Contacts</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="student-group-form">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by ID ...">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Name ...">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Phone ...">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="search-student-btn">
                        <button type="btn" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table comman-shadow">
                    <div class="card-body">

                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Lists</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="#" class="btn btn-outline-gray me-2 active"><i
                                            class="feather-list"></i></a>
                                    <a href="#" class="btn btn-outline-gray me-2"><i class="feather-grid"></i></a>
                                    <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i>
                                        Download</a>
                                    <a href="/create-official" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table
                                class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>
                                            <div class="form-check check-tables">
                                                <input class="form-check-input" type="checkbox" value="something">
                                            </div>
                                        </th>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $people)
                                        <tr>
                                            <td>
                                                <div class="form-check check-tables">
                                                    <input class="form-check-input" type="checkbox" value="something">
                                                </div>
                                            </td>
                                            <td>{{ $people->id }}</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="student-details.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="{{ asset('storage/pap_images/' . $people->image) }}"
                                                            alt="User Image"></a>
                                                </h2>
                                            </td>
                                            <td>{{ $people->name }}</td>
                                            <td class="text-end">
                                                <div class="actions ">
                                                    <form action="/edit-official/{{ $people->id }}" method="GET">
                                                        <button type="submit"
                                                            class="custom-edit-btn btn btn-sm bg-danger-light">
                                                            <i class="fas fa-comments"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .actions {
            justify-content: start;
        }

        .custom-edit-btn {
            font-size: 20px;
            color: #ffd000 !important;
        }

        .custom-edit-btn:hover {
            color: white !important;
            background-color: #ffd725 !important;
        }

        .custom-delete-btn {
            font-size: 20px;
            color: red !important;
        }

        .custom-delete-btn:hover {
            color: white !important;
            background-color: red !important;
        }
    </style>
@endpush

{{-- // const currentUser = @json(auth()->user());
// const otherUsers = @json($users); --}}

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // Populate the contacts list
            const contactsWrapper = document.getElementById('contacts-list');
            for (let user of otherUsers) {
                const username = user.name;

                const usernameDiv = document.createElement('div');
                usernameDiv.classList.add('contact-name');
                usernameDiv.innerText = username;

                const contactContainerDiv = document.createElement('div');
                contactContainerDiv.classList.add('contact-container');

                contactContainerDiv.appendChild(usernameDiv);
                contactsWrapper.appendChild(contactContainerDiv);
            }

            // Function to load TalkJS script
            function loadTalkJSScript(callback, errorCallback) {
                const script = document.createElement('script');
                script.src = 'https://cdn.talkjs.com/talk.js';
                script.onload = callback;
                script.onerror = errorCallback;
                document.body.appendChild(script);
            }

            // Function to initialize TalkJS
            function initializeTalkJS() {
                if (typeof Talk === 'undefined') {
                    console.error('TalkJS is not defined');
                    return;
                }

                console.log('TalkJS loaded, initializing...');

                let me = new Talk.User({
                    id: currentUser.id,
                    name: currentUser.name,
                });

                window.talkSession = new Talk.Session({
                    appId: 'tqsx4DeW',
                    me: me,
                });

                const chatbox = talkSession.createChatbox();
                chatbox.mount(document.getElementById('talkjs-container'));

                const contactsListDivs = document.getElementsByClassName('contact-container');

                Array.from(contactsListDivs).forEach(function(contactDiv, index) {
                    contactDiv.addEventListener('click', function() {
                        console.log('Contact clicked:', otherUsers[index].name); // Debug log
                        const otherUser = new Talk.User(otherUsers[index]);
                        const conversation = talkSession.getOrCreateConversation(Talk.oneOnOneId(me,
                            otherUser));
                        conversation.setParticipant(me);
                        conversation.setParticipant(otherUser);
                        chatbox.select(conversation);
                    });
                });
            }

            loadTalkJSScript(
                function() {
                    console.log('TalkJS script loaded successfully');
                    setTimeout(initializeTalkJS, 100);
                },
                function() {
                    console.error('Failed to load TalkJS script');
                }
            );
        });
    </script>
@endpush




@push('css')
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <style>
        #contacts-list {
            overflow-y: auto;
            width: 300px;
            height: 500px;
            background-color: #ECECEC;
            border-radius: 0.75rem;
            border: 1px solid #D4D4D4;
            font-family: 'Inter';

        }

        #contacts-list h2 {
            padding: 20px;
        }

        .contact-container {

            height: 50px;
            display: flex;
            padding: 5px 0;
            cursor: pointer;
            border-bottom: 1px solid #D4D4D4;
        }

        .contact-container:hover {
            background-color: #007DF9;
            color: #fff;
            font-weight: bold;
        }

        .contact-name {
            padding: 0 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }
    </style>
@endpush
