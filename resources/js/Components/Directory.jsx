import React from "react";

function Directory({ id, name, index }){
    return (
        <div className="col-xxl-2 col-6 folder-card">
            <div className="card border-1 shadow-none directory"
                 data-name="dir" data-id={id} id={`folder-${id}`}>
                <div className="card-body">
                    <div className="d-flex mb-1">
                        <div className="form-check form-check-danger mb-3 fs-15 flex-grow-1">
                            <input className="form-check-input" type="checkbox" value="" id={`folderlistCheckbox_${index}`}/>
                            <label className="form-check-label" htmlFor={`folderlistCheckbox_${index}`}></label>
                        </div>
                        <div className="dropdown">
                            <button className="btn btn-ghost-primary btn-icon btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i className="ri-more-2-fill fs-16 align-bottom"/>
                            </button>
                            <ul className="dropdown-menu dropdown-menu-end">
                                <li><a className="dropdown-item view-item-btn" href="#">باز کردن</a></li>
                                <li><a className="dropdown-item edit-folder-list" href="#createFolderModal" data-bs-toggle="modal" role="button">تغییر نام</a></li>
                                <li><a className="dropdown-item" href="#removeFolderModal" data-bs-toggle="modal" role="button">حذف</a></li>
                            </ul>
                        </div>
                    </div>

                    <div className="text-center">
                        <div className="mb-2">
                            <i className="ri-folder-2-fill align-bottom text-warning display-5"/>
                        </div>
                        <h6 className="fs-15 folder-name">{name}</h6>
                    </div>

                    <div className="hstack mt-4 text-muted">
                        <span className="me-auto"><b>12</b> پوشه</span>
                        <span><b>4.10</b> مگابایت</span>
                    </div>
                </div>
            </div>
        </div>
    )
}
export default Directory;
