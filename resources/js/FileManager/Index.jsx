import React, { useEffect, useState } from 'react';
import axios from 'axios';
import ReactDOM from 'react-dom/client';
import Directory from "@/Components/Directory.jsx";

function FileManager() {
    const [directories, setDirectories] = useState(null);

    useEffect(() => {
        const fetchData = async () => {
            try {
                const response = await axios.get('http://127.0.0.1:8000/v1/directories');
                setDirectories(response.data);
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        };
        fetchData();
    }, []);

    useEffect(() => {
        if (directories) {
            console.log('Directories:', directories);
        }
    }, [directories]);

    return (
        <>
            <div className="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 className="mb-sm-0">داشبورد</h4>
                <div className="page-title-right">
                    <ol className="breadcrumb m-0">
                        <li className="breadcrumb-item active">داشبورد</li>
                    </ol>
                </div>
            </div>
            <div className="container-fluid">
                <div className="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
                    <div className="file-manager-sidebar">
                        <div className="p-3 d-flex flex-column h-100">
                            <div className="mb-3">
                                <h5 className="mb-0 fw-bold">درایو من</h5>
                            </div>
                            <div className="search-box">
                                <input type="text" className="form-control bg-light border-light"
                                       placeholder="Search here..."/>
                                    <i className="ri-search-2-line search-icon"/>
                            </div>
                            <div className="mt-3 mx-n4 px-4 file-menu-sidebar-scroll" data-simplebar>
                                <ul className="list-unstyled file-manager-menu">
                                    <li>
                                        <a data-bs-toggle="collapse" href="#collapseExample" role="button"
                                           aria-expanded="true" aria-controls="collapseExample">
                                            <i className="ri-folder-2-line align-bottom me-2"/> <span
                                            className="file-list-link">درایو من</span>
                                        </a>
                                        <div className="collapse show" id="collapseExample">
                                            <ul className="sub-menu list-unstyled">
                                                <li>
                                                    <a href="#!">فایل‌های اخیر</a>
                                                </li>
                                                <li>
                                                    <a href="#!">اشتراک‌ گذاشته ‌شده‌ها</a>
                                                </li>
                                                <li>
                                                    <a href="#!">لیست مورد علاقه</a>
                                                </li>
                                                <li>
                                                    <a href="#!">سطل زباله</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#!"><i className="ri-file-list-2-line align-bottom me-2"/> <span
                                            className="file-list-link">اسناد</span></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i className="ri-share-line align-bottom me-2"/> <span
                                            className="file-list-link">اشتراک‌گذاری‌ها</span></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i className="ri-history-line align-bottom me-2"/> <span
                                            className="file-list-link">تاریخچه</span></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i className="ri-star-line align-bottom me-2"/> <span
                                            className="file-list-link">لیست مورد علاقه</span></a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i className="ri-delete-bin-line align-bottom me-2"/>
                                            <span className="file-list-link">حذف شده‌ها</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div className="mt-auto">
                                <h6 className="fs-12 text-muted text-uppercase mb-3">وضعیت حافظه</h6>
                                <div className="d-flex align-items-center">
                                    <div className="flex-shrink-0">
                                        <i className="ri-database-2-line fs-17"/>
                                    </div>
                                    <div className="flex-grow-1 ms-3 overflow-hidden">
                                        <div className="progress mb-2 progress-sm">
                                            <div className="progress-bar bg-success" role="progressbar"
                                                 aria-valuenow="25" aria-valuemin="0"
                                                 aria-valuemax="100">

                                            </div>
                                        </div>
                                        <span className="text-muted fs-12 d-block text-truncate"><b>320</b> مگابایت استفاده شده از  <b>1000</b> مگابایت</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="file-manager-content w-100 p-3 py-0">
                        <div className="mx-n3 pt-4 px-4 file-manager-content-scroll" data-simplebar>
                            <div id="folder-list" className="mb-2">
                                <div className="row justify-content-beetwen g-2 mb-3">
                                    <div className="col">
                                        <div className="d-flex align-items-center">
                                            <div className="flex-shrink-0 me-2 d-block d-lg-none">
                                                <button type="button"
                                                        className="btn btn-soft-success btn-icon btn-sm fs-16 file-menu-btn">
                                                    <i className="ri-menu-2-fill align-bottom"/>
                                                </button>
                                            </div>
                                            <div className="flex-grow-1">
                                                <h5 className="fs-17 mb-0">پوشه‌ها</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="col-auto">
                                        <div className="d-flex gap-2 align-items-start">
                                            <button className="btn btn-primary w-sm create-folder-modal flex-shrink-0"
                                                    data-bs-toggle="modal" data-bs-target="#createFolderModal"><i
                                                className="ri-add-line align-bottom me-1"/> ایجاد پوشه
                                            </button>
                                            <button className="btn btn-success createFile-modal" data-bs-toggle="modal"
                                                    data-bs-target="#createFileModal"><i
                                                className="ri-upload-2-line align-bottom me-1"/> بارگذاری پرونده
                                            </button>

                                        </div>
                                    </div>
                                </div>
                                <div className="row" id="folderlist-data">
                                    <div className="col-xxl-2 col-6 folder-card">
                                        <div className="card border-1 shadow-none" id="go-back">
                                            <div className="card-body">
                                                <div className="d-flex mb-1">
                                                    <div
                                                        className="form-check form-check-danger mb-3 fs-15 flex-grow-1">
                                                        &nbsp;
                                                    </div>
                                                </div>

                                                <div className="text-center">
                                                    <div className="mb-2">
                                                        <i className="ri-arrow-go-back-line align-bottom text-warning display-5"/>
                                                    </div>
                                                    <h6 className="fs-15 folder-name">بازگشت</h6>
                                                </div>
                                                <div className="hstack mt-4 text-muted">
                                                    <span className="me-auto"><b>&nbsp; </b> </span>
                                                    <span><b>&nbsp; </b>  </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {directories && directories.length > 0 ? (
                                        directories.map((directory, index) => (
                                            <Directory key={index}
                                                       id={directory.id}
                                                       name={directory.name}
                                                       index={index}
                                            />
                                        ))
                                    ) : (
                                        <div>اطلاعاتی برای نمایش وجود ندارد.</div>
                                    )}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div className="modal fade zoomIn" id="createFolderModal" tabIndex="-1">
                <div className="modal-dialog modal-dialog-centered">
                    <div className="modal-content border-0">
                        <div className="modal-header p-3 bg-success-subtle">
                            <h5 className="modal-title fw-bold" id="createFolderModalLabel">ایجاد پوشه</h5>
                            <button type="button" className="btn-close" data-bs-dismiss="modal" id="addFolderBtn-close"
                                    aria-label="Close"/>
                        </div>
                        <div className="modal-body">
                            <form method="post" className="needs-validation createfolder-form" id="createDirectoryForm">
                                @csrf
                                <div className="mb-4">
                                    <label htmlFor="foldername-input" className="form-label">نام پوشه</label>
                                    <input type="text" className="form-control" id="directoryNameInput" required
                                           placeholder="نام پوشه را وارد کنید."/>
                                </div>
                                <div className="hstack gap-2 justify-content-end">
                                    <button type="button" className="btn btn-ghost-danger" data-bs-dismiss="modal">
                                        <i className="ri-close-line align-bottom"/> بستن
                                    </button>
                                    <button type="submit" className="btn btn-primary" id="addNewFolder">
                                        ثبت پوشه
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div className="modal fade zoomIn" id="createFileModal" tabIndex="-1">
                <div className="modal-dialog modal-dialog-centered">
                    <div className="modal-content border-0">
                        <div className="modal-header p-3 bg-success-subtle">
                            <h5 className="modal-title fw-bold" id="createFileModalLabel">بارگذاری پرونده</h5>
                            <button type="button" className="btn-close" data-bs-dismiss="modal" id="addFileBtn-close"
                                    aria-label="Close"/>
                        </div>
                        <div className="modal-body">
                            <form autoComplete="off" className="needs-validation createfile-form" id="createfile-form"
                                  noValidate>
                                <div className="mb-4">
                                    <label htmlFor="filename-input" className="form-label">نام پرونده</label>
                                    <input type="text" className="form-control" id="filename-input" value="" required
                                           placeholder=" نام پرونده را وارد کنید" />
                                        <div className="invalid-feedback">لطفا نام پرونده را وارد کنید.</div>
                                </div>
                                <div className="hstack gap-2 justify-content-end">
                                    <button type="button" className="btn btn-ghost-success" data-bs-dismiss="modal"><i
                                        className="ri-close-line align-bottom"/> بستن
                                    </button>
                                    <button type="submit" className="btn btn-primary" id="addNewFile">بارگذاری</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="removeFileItemModal" className="modal fade zoomIn" tabIndex="-1" >
                <div className="modal-dialog modal-dialog-centered">
                    <div className="modal-content">
                        <div className="modal-header">
                            <button type="button" className="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    id="close-removefilemodal"/>
                        </div>
                        <div className="modal-body">
                            <div className="mt-2 text-center">
                                <div className="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                    <h4>آیا مطمئن هستید؟</h4>
                                    <p className="text-muted mx-4 mb-0">پوشه به همراه محتویات آن حذف خواهند شد. آیا
                                        مطمئن هستید؟</p>
                                </div>
                            </div>
                            <div className="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" className="btn w-sm btn-light" data-bs-dismiss="modal">بستن
                                </button>
                                <button type="button" className="btn w-sm btn-danger" id="remove-fileitem">بله. حذفش
                                    کن!
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="removeFolderModal" className="modal fade zoomIn" tabIndex="-1" >
                <div className="modal-dialog modal-dialog-centered">
                    <div className="modal-content">
                        <div className="modal-header">
                            <button type="button" className="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    id="close-removeFoldermodal"/>
                        </div>
                        <div className="modal-body">
                            <div className="mt-2 text-center">
                                <div className="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                    <h4>آیا طممئن هستید؟</h4>
                                    <p className="text-muted mx-4 mb-0">آیا از حذف پرونده مطمئن هستید؟</p>
                                </div>
                            </div>
                            <div className="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" className="btn w-sm btn-light" data-bs-dismiss="modal">بستن
                                </button>
                                <button type="button" className="btn w-sm btn-danger" id="remove-folderList">بله. حذفش
                                    کن!
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}
export default FileManager;
