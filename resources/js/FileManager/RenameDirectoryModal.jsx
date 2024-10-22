import React, {useEffect, useState} from 'react';

const RenameDirectoryModal = ({ onRename, initialName }) => {
    const [show, setShow] = useState(false);
    const [newName, setNewName] = useState(initialName);

    const handleClose = () => setShow(false);
    const handleSave = () => {
        onRename(newName);
        handleClose();
    };
    useEffect(() => {
        setNewName(initialName);
    }, [initialName]);
    return (
        <div className="modal fade zoomIn" id="renameDirectoryModal" tabIndex="-1" aria-labelledby="renameDirectoryModalLabel" aria-hidden="true">
            <div className="modal-dialog modal-dialog-centered">
                <div className="modal-content border-0">
                    <div className="modal-header p-3 bg-success-subtle">
                        <h5 className="modal-title fw-bold" id="renameDirectoryModalLabel">تغییر نام</h5>
                        <button type="button" className="btn-close" data-bs-dismiss="modal" aria-label="Close"/>
                    </div>
                    <div className="modal-body">
                        <div className="form-group">

                            <label htmlFor="newDirectoryName">نام جدید</label>
                            <input type="text" className="form-control" id="newDirectoryName"
                                   placeholder="نام جدید را وارد کنید"
                                   value={newName}
                                   onChange={(e) => setNewName(e.target.value)} />
                        </div>
                    </div>
                    <div className="modal-footer">
                        <button type="button" className="btn btn-secondary" data-bs-dismiss="modal">بستن</button>

                        <button type="button" className="btn btn-primary" onClick={handleSave}>ثبت</button>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default RenameDirectoryModal;
